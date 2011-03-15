--drop table if exists save_actions;
--create table save_actions as (select now(), * from actions);

-- use this to play back save_actions into actions:
-- insert into actions (select data_type, (CASE WHEN oneof_is(to_textarray(action), 'D') THEN 'D' WHEN oneof_is(to_textarray(action), 'C') THEN 'C' ELSE 'M' END), id from save_actions group by data_type, id);

-- **
-- * Hooks:
-- * 'osmosis_update_start' - called when function is called
-- * 'osmosis_update_delete' - called when changed items were removed - use this to remove data from other tables
-- * 'osmosis_update_finish' - called when data has been updated - use this to update data in other tables

CREATE OR REPLACE FUNCTION osmosisUpdate() RETURNS void AS $$
DECLARE
BEGIN
  raise notice 'called osmosisUpdate()';

  perform call_hooks('osmosis_update_start');

  ---- simplify table actions ----
  -- mark all ways as 'M' which were implicitly changed (because nodes of the
  -- way were changed)
  insert into actions
   (select
      'W' as "data_type",
      'M' as "action",
      way_nodes.way_id as "id"
    from
      actions node_actions
      left join way_nodes
        on way_nodes.node_id=node_actions.id
      left join actions way_actions
        on way_nodes.way_id=way_actions.id and way_actions.data_type='W'
    where
      node_actions.data_type='N' and
      way_nodes.way_id is not null and
      way_actions.id is null
    group by
      way_nodes.way_id);

  -- mark all relations as 'n' which were implicitly changed (because nodes of
  -- the relation were changed)
  insert into actions
   (select
      'R' as "data_type",
      'M' as "action",
      relation_members.relation_id as "id"
    from
      actions node_actions
      left join relation_members
        on relation_members.member_id=node_actions.id and
	  relation_members.member_type='N'
      left join actions rel_actions
        on relation_members.relation_id=rel_actions.id and
	  rel_actions.data_type='R'
    where
      node_actions.data_type='N' and
      relation_members.relation_id is not null and
      rel_actions.id is null
    group by
      relation_members.relation_id);

  -- mark all relations as 'w' which were implicitly changed (because ways of
  -- the relation were changed)
  insert into actions
   (select
      'R' as "data_type",
      'M' as "action",
      relation_members.relation_id as "id"
    from
      actions way_actions
      left join relation_members
        on relation_members.member_id=way_actions.id and
	  relation_members.member_type='W'
      left join actions rel_actions
        on relation_members.relation_id=rel_actions.id and
	  rel_actions.data_type='R'
    where
      way_actions.data_type='W' and
      relation_members.relation_id is not null and
      rel_actions.id is null
    group by
      relation_members.relation_id);

  -- we should also mark relations where relations were changed, but currently
  -- we don't do recursive relations
  raise notice 'calculated implicit changes';

  -- for later check make a copy of actions
  -- delete from save_actions;
  insert into save_actions (select now(), * from actions);

  raise notice 'saved actions';

  raise notice E'statistics:\n%', (select array_to_string(to_textarray(stat.text), E'\n') from (select data_type || E'\t' || action || E'\t' || count(id) as text from actions group by data_type, action order by data_type, action) stat);
  
  -- delete cache
  perform cache_remove(
    (CASE WHEN data_type='N' THEN 'node_'||id
          WHEN data_type='W' THEN 'way_'||id
	  WHEN data_type='R' THEN 'rel_'||id
    END)) from actions;

  raise notice 'deleted from osm_cache';

  -- delete changed/deleted points
  delete from osm_point using actions where osm_id='node_'||actions.id and data_type='N';

  raise notice 'deleted from osm_point';

  -- delete changed/deleted lines
  delete from osm_line using
    (select id from actions where data_type='W') actions 
  where osm_id='way_'||id;

  raise notice 'deleted from osm_line';

  -- delete changed/deleted rels
  delete from osm_rel using actions where osm_id='rel_'||actions.id and data_type='R';

  raise notice 'deleted from osm_rel';

  -- delete changed/deleted polygons
  delete from osm_polygon using
    (select id from actions where data_type='W') actions
  where osm_id='way_'||id;

  raise notice 'deleted from osm_polygon 1';

  delete from osm_polygon using
    (select id from actions where data_type='R') actions
  where osm_id='rel_'||id;

  raise notice 'deleted from osm_polygon 2';

  perform call_hooks('osmosis_update_delete');

  -- insert changed/created points
  perform assemble_point(actions.id) from actions where actions.data_type='N' and actions.action in ('C', 'M');

  raise notice 'inserted to osm_point';

  -- insert changed/created lines
  perform assemble_line(id) from 
    (select id from actions where data_type='W' and action in ('C', 'M')) actions;

  raise notice 'inserted to osm_line';

  -- insert changed/created relations
  perform assemble_rel(id) from 
    (select id from actions where data_type='R' and action in ('C', 'M')) actions;

  raise notice 'inserted to osm_rel';

  -- insert changed/created polygons
  perform assemble_polygon(id) from
       (select id from actions where data_type='W' and action in ('C', 'M')) actions;

    raise notice 'inserted to osm_polygon 1';

  -- insert changed/created multipolygons
    perform
      assemble_multipolygon(actions.id)
    from
      (select id from actions where data_type='R' and action in ('C', 'M')) actions
	join relation_tags on
	  relation_tags.relation_id=actions.id and
	  relation_tags.k='type'
      where
          relation_tags.v='multipolygon';

  raise notice 'inserted to osm_polygon 2';

  perform call_hooks('osmosis_update_insert');

  perform call_hooks('osmosis_update_finish');

  raise notice 'finished osmosisUpdate()';
END;
$$ LANGUAGE plpgsql;
