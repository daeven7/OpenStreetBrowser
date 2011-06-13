var my_maps_toolbox;
var my_maps_default;
var my_maps_current;
var my_maps_control;

function my_maps_item(data, feature) {
  this.inheritFrom=geo_object;
  this.inheritFrom();
  this.type="my_maps_item";

  // data
  this.data=function() {
    var ret=this.tags.data();

    ret.geo=this.feature.geometry.toString();
    ret.style=css_style_to_string(this.feature.style);

    return ret;
  }

  // constructor
  if(!data)
    data={  };
  if(!data.id)
    data.id="my_maps_"+uniqid();

  this.id=data.id;
  this.tags=new tags(data);
  this.map=null;
  if(!feature) {
    // create feature from tags
    var geo=new postgis(data.geo);
    this.feature=geo.geo()[0];
    vector_layer.addFeatures([this.feature]);
  }
  else
    this.feature=feature;

  this.feature.style={ strokeWidth: 2, strokeColor: '#ff0000' };
  vector_layer.redraw();
}

function my_maps_map(data) {
  this.inheritFrom=geo_object;
  this.inheritFrom();
  this.type="my_maps_map";

  // add_item
  this.add_item=function(item) {
    this.items.push(item);
    item.map=this;
  }

  // data
  this.data=function() {
    var ret={};
    ret.data=this.tags.data();
    ret.items=[];
    for(var i=0; i<this.items.length; i++) {
      ret.items.push(this.items[i].data());
    }

    return ret;
  }

  // constructor
  if(!data)
    data={ data: { id: uniqid()}, items: [] };

  this.id=data.data.id;
  this.tags=new tags(data.data);
  this.items=[];
  for(var i=0; i<data.items.length; i++) {
    this.add_item(new my_map_item(data.items[i]));
  }
}

function my_maps_activate() {
  my_maps_control.activate();
}

function my_maps_deactivate() {
  my_maps_control.deactivate();
}

function my_maps_add_feature(feature) {
  my_maps_current.add_item(new my_maps_item(null, feature));
}

function my_maps_init() {
  // create toolbox
  my_maps_toolbox=new toolbox({
    icon: "plugins/my_maps/icon.png",
    icon_title: "my_maps",
    weight: 5,
    callback_activate: my_maps_activate,
    callback_deactivate: my_maps_deactivate,
  });
  register_toolbox(my_maps_toolbox);

  // create a default map
  my_maps_default=new my_maps_map(null);
  my_maps_current=my_maps_default;

  // add a control to the map - to be (de)activated when toolbox is
  // (de)activated
  my_maps_control=new OpenLayers.Control.DrawFeature(vector_layer,
    OpenLayers.Handler.Path, {'featureAdded': my_maps_add_feature });
  map.addControl(my_maps_control);
}

register_hook("init", my_maps_init);
