function category_rule_match(dom, cat, rule) {
  this.inheritFrom=osm_object;
  this.inheritFrom(dom);

  // text
  this.write_list=function(ul) {
    var x;
    var name="";
    var add="";
    var title="";

    // Create a 'li'-element for the match in the supplied ul
    var li=dom_create_append(ul, "li");
    li.id=this.id;
    li.rule_id=this.rule.id;
    li.className="category_rule_match";

    // Set an icon
    if(x=this.rule.tags.get("icon")) {
      x=get_icon(x);
      if(x)
	li.style.listStyleImage="url('"+x.icon_url()+"')";
    }

    // in the li element create a link to the object
    var a=dom_create_append(li, "a");
    a.href="#"+this.id;
    a.onmouseover=this.set_highlight.bind(this);
    a.onmouseout=this.unset_highlight.bind(this);

    // what's the rule's 'list_text' tag?
    var parse_str=this.rule.tags.get("list_text");
    if(!parse_str)
      parse_str=this.category.tags.get("list_text");
    if(!parse_str)
      parse_str="[ref] - [name];[name];[ref];[operator]";

    // get the name of the object via the rule's 'list_text' tag
    x=this.tags.parse(parse_str, data_lang);
    if(!x)
      x=t("unnamed");
    dom_create_append_text(a, x);
   
    // if the rule has a 'list_type'-tag append the parsed string in brackets
    var parse_str=this.rule.tags.get("list_type");
    if(parse_str) {
      x=this.tags.parse(parse_str, data_lang);
      if(x) {
        x=" ("+x+")";
        dom_create_append_text(li, x);
      }
    }

    // Get the name of the match or use the 'match'-string
    if(this.rule.tags.get_lang("name", ui_lang)) {
      title=split_semicolon(this.rule.tags.get_lang("name", ui_lang));
      if(title.length==1)
	title=title[0];
      else {
	if(this.id_split.length>1)
	  title=title[1];
	else
	  title=title[0];
      }
    }
    else
      title=this.rule.tags.get("match");

    // Append name after link
    dom_create_append_text(li, " ");
    var s=dom_create_append(li, "span");
    s.className="name";
    dom_create_append_text(s, title);

    // set description as tooltip
    if(x=this.rule.tags.get_lang("description", ui_lang)) {
      a.title=x;
    }
  }

  // constructor
  this.category=cat;
  this.rule=rule;
}

function category_rule(category, dom) {
  // constructor
  this.icon=null;
  if(!dom) {
    this.id=uniqid();
    this.tags=new tags(category_rule_tags_default);
  }
  else {
    this.id=dom.getAttribute("id");
    this.tags=new tags();
    this.tags.readDOM(dom);
//    if(this.tags.get("icon"))
//      this.icon=icon_git.get_obj(this.tags.get("icon"));
// TODO: maybe initialize icon, when we need it?
  }
  this.data=[];
  this.category=category;

  // load_entry
  this.load_entry=function(dom) {
    var id=dom.getAttribute("id");
    if(!this.data[id]) {
      this.data[id]=new category_rule_match(dom, this.category, this);
    }
    var match=this.data[id];
    var time=new Date();
    this.data[id].access=time.getTime();

    return this.data[id];
  }

}
