<?
// All untranslated strings have a # in front. When you translate a string
// please remove this hash.

//  Every language string looks like this:
//  $lang_str["restaurant"]=array("Restaurant", "Restaurants");
//  the first entry is the translation of the language string in Singular,
//  the second the Plural form.
//
//  Optionally you can define the Gender (F, M, N) of this word, e.g. the
//  German translation for office:
//  $lang_str["office"]=array(N, "Büro", "Büros");
//
//  If a Singular/Plural form is not
//  suitable/necessary you can ignore the array, e.g.
//  $lang_str["help"]="Help";

// General
$lang_str["general_info"]="Allgemeine Informationen";
$lang_str["yes"]="ja";
$lang_str["no"]="nein";
$lang_str["save"]=array("Speichern");
$lang_str["cancel"]=array("Abbrechen");
$lang_str["longitude"]=array("Longitude", "Longituden");
$lang_str["latitude"]=array("Latitude", "Latituden");
$lang_str["noname"]="(kein Name)";
$lang_str["info_back"]="zur Übersicht";
$lang_str["info_zoom"]="zoomen";
$lang_str["nothing_found"]=array("nichts gefunden");
$lang_str["loading"]="lade";
$lang_str["more"]="mehr";

// Headings
$lang_str["head:general_info"]="Allgemeine Informationen";
$lang_str["head:stops"]="Haltestellen";
$lang_str["head:routes"]="Routen";
$lang_str["head:members"]="Mitglieder";
$lang_str["head:address"]="Adresse";
$lang_str["head:internal"]="Interne OSM-Daten";
$lang_str["head:wikipedia"]="Wikipedia";
$lang_str["head:housenumbers"]="Hausnummern";
$lang_str["head:roads"]="Straßen";
$lang_str["head:rails"]="Eisenbahnstrecken";
$lang_str["head:places"]="Orte";
$lang_str["head:borders"]="Grenzen";
$lang_str["head:landuse"]="Landnutzung";
$lang_str["head:buildings"]="Gebäude";
$lang_str["head:pt"]="Öffentlicher Verkehr";
$lang_str["head:services"]="Dienstleistungen";
$lang_str["head:culture"]="Kultureinrichtungen";
$lang_str["head:graves"]="Wichtige Gräber";
$lang_str["head:routing"]="Routenplanung";
$lang_str["head:search"]="Suche";
$lang_str["head:actions"]="Aktionen";
$lang_str["head:tags"]=array("Tag", "Tags");
$lang_str["head:whats_here"]="Was ist hier?";

$lang_str["action_browse"]="In OSM ansehen";
$lang_str["action_edit"]="Auf OSM editieren";

$lang_str["geo_click_pos"]=array("Klicke auf deine Position auf der Karte");
$lang_str["geo_set_pos"]="Meine Position festlegen";
$lang_str["geo_change_pos"]="Meine Position ändern";

$lang_str["routing_type_car"]="Auto";
$lang_str["routing_type_car_shortest"]="Auto (kürzeste)";
$lang_str["routing_type_bicycle"]="Fahrrad";
$lang_str["routing_type_foot"]="Zu Fuß";
$lang_str["routing_type"]="Routentyp";
$lang_str["routing_distance"]="Entfernung";
$lang_str["routing_time"]="Zeit";
$lang_str["routing_disclaimer"]="Routing: (c) von <a href='http://www.cloudmade.com'>Cloudmade</a>";

$lang_str["list_info"]="Wähle eine Kategorie, um den Karteninhalt zu durchstöbern oder klicke auf ein Objekt auf der Karte für Details";
$lang_str["list_leisure_sport_tourism"]="Freizeit, Sport und Tourismus";

// Mapkey
$lang_str["map_key:head"]="Legende";
$lang_str["map_key:zoom"]="Zoomstufe";

#$lang_str["grave_is_on"]="Grave is on";

$lang_str["main:map_key"]="Legende";
$lang_str["main:options"]="Optionen";
$lang_str["main:about"]="Impressum";
$lang_str["main:donate"]="Spende";
$lang_str["main:licence"]="Kartendaten: <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">cc-by-sa</a> <a href=\"http://www.openstreetmap.org\">OpenStreetMap</a>-Mitwirkende | OSB: <a href=\"http://wiki.openstreetmap.org/wiki/User:Skunk\">Stephan Plepelits</a> und <a href=\"http://wiki.openstreetmap.org/wiki/OpenStreetBrowser#People_involved\">Mitwirkende</a>";
$lang_str["main:permalink"]="Permalink";

$lang_str["help:no_object"]="<div class='obj_actions'><a class='zoom' href='#'></a></div><h1>Objekt nicht gefunden</h1>Ein Objekt mit der ID \"%s\" konnte nicht gefunden werden. Das kann eine (oder mehrere) der folgenden Ursachen haben:<ul><li>Die ID ist falsch.</li><li>Das Objekt wurde von einer anderen Applikation identifiziert und ist im OpenStreetBrowser (noch) nicht verfügbar</li><li>Das Objekt liegt ausserhalb des unterstützten Gebiets</li><li>Der Link, dem Du gefolgt bist, war alt und das Objekt wurde inzwischen aus der OpenStreetMap gelöscht.</li>";

$lang_str["start:choose"]=array("Wähle einen Kartenausschnitt");
$lang_str["start:geolocation"]=array("automatische Geolokalisierung");
$lang_str["start:lastview"]=array("letzter Kartenausschnitt");
$lang_str["start:savedview"]=array("letzter Permalink");
$lang_str["start:startnormal"]=array("behalte Ansicht");
$lang_str["start:remember"]=array("Auswahl merken");
$lang_str["start:edit"]=array("editieren...");

$lang_str["options:autozoom"]="Autozoomverhalten";
$lang_str["help:autozoom"]="Wenn ein Objekt ausgewählt wird, schwenkt der Kartenausschnitt zu dem Objekt, auch der Zoomlevel wird angepasst. Mit dieser Option kann zwischen verschiedenen Modi gewählt werden.";
$lang_str["options:autozoom:pan"]="Auf das aktuelle Objekt schwenken (schöner)";
$lang_str["options:autozoom:move"]="Zum aktuellen Objekt springen (schneller)";
$lang_str["options:autozoom:stay"]="Den Kartenausschnitt nie verschieben";

$lang_str["options:language_support"]="Sprachunterstützung";
$lang_str["help:language_support"]="In diesen Optionen können die verwendeten Sprachen eingestellt werden. In der ersten Einstellung kann die Sprache der Anwendungsoberfläche gewählt werden. Mit der zweiten Einstellung kann die Datensprache eingestellt werden. Die Daten vieler geographischer Objekte sind in mehrere Sprachen übersetzt. Wenn keine Übersetzung vorhanden ist, oder \"Lokale Sprache\" ausgewählt wurde, wird die Hauptsprache des Objektes angezeigt.";
$lang_str["options:ui_lang"]="Anwendungssprache";
$lang_str["options:data_lang"]="Datensprache";
$lang_str["lang:"]="Lokale Sprache";

$lang_str["overlay:data"]="Data";
$lang_str["overlay:draggable"]="Markierungen";

$lang_str["wikipedia:read_more"]="weiterlesen";

$lang_str["basemap:osb"]="OpenStreetBrowser";
$lang_str["basemap:mapnik"]="Standard (Mapnik)";
$lang_str["basemap:osmarender"]="Standard (OsmaRender)";
$lang_str["basemap:cyclemap"]="CycleMap";

// please finish this list, see list.php for full list of languages
$lang_str["lang:de"]="Deutsch";
$lang_str["lang:bg"]="Bulgarisch";
$lang_str["lang:en"]="Englisch";
$lang_str["lang:es"]="Spanisch";
$lang_str["lang:it"]="Italienisch";
$lang_str["lang:fr"]="Französisch";
$lang_str["lang:uk"]="Ukrainisch";
$lang_str["lang:ru"]="Russisch";
$lang_str["lang:ja"]="Japanisch";

// the following language strings are deprecated
$lang_str["cat:leisure"]="Freizeit, Sport und Einkauf";
$lang_str["cat:leisure/gastro"]="Gastronomie";
$lang_str["cat:leisure/leisure"]="Freizeit";
$lang_str["cat:leisure/sport"]="Sport";
$lang_str["cat:leisure/shop"]="Einkauf";
$lang_str["cat:culture"]="Kultur und Religion";
$lang_str["cat:culture/culture"]="Kultur";
$lang_str["cat:culture/religion"]="Religion";
$lang_str["cat:culture/historic"]="Geschichte";
$lang_str["cat:culture/tourism"]="Tourismus";
$lang_str["cat:shop"]="Einkaufen";
$lang_str["cat:services"]="Dienste";
$lang_str["cat:services/communication"]="Kommunikation";
$lang_str["cat:services/financial"]="Finanzen";
$lang_str["cat:services/emergency"]="Notfalldienste";
$lang_str["cat:services/health"]="Gesundheitsdienste";
$lang_str["cat:services/education"]="Bildungseinrichtungen";
$lang_str["cat:services/public"]="Öffentliche Dienste";
$lang_str["cat:services/tourism"]="Tourismusdienste";
$lang_str["cat:places"]=array("Ort", "Orte");
$lang_str["cat:places/places"]=array("Ort", "Orte");
$lang_str["cat:places/residential"]="Wohngebiete";
$lang_str["cat:places/streets"]="Straßenverzeichnis";
$lang_str["cat:places/natural"]="Geographische Objekte";
$lang_str["cat:transport"]="Transport";
$lang_str["cat:transport/car"]="Motorisierter Individualverkehr";
$lang_str["cat:transport/car/amenities"]="Einrichtungen";
$lang_str["cat:transport/car/routes"]=array("Routen");
$lang_str["cat:transport/car/furniture"]="Straßenausstattung";
$lang_str["cat:transport/pt"]="Öffentlicher Verkehr";
$lang_str["cat:transport/pt/amenities"]="Einrichtungen";
$lang_str["cat:transport/pt/routes"]="Routen";
$lang_str["cat:transport/pt/stops"]="Haltestellen";
$lang_str["cat:transport/alternative"]="Alternativ (Rad, Wandern, ...)";
$lang_str["cat:transport/alternative/amenities"]="Einrichtungen";
$lang_str["cat:transport/alternative/routes"]="Routes";
$lang_str["cat:transport/other"]="Andere";
$lang_str["cat:agri_ind"]="Landwirtschaft und Industrie";
$lang_str["cat:agri_ind/power"]="Energie";
$lang_str["cat:agri_ind/works"]="Fabriken";
$lang_str["cat:agri_ind/agriculture"]="Landwirtschaft";
$lang_str["cat:agri_ind/construction"]="Baustellen";
$lang_str["cat:agri_ind/railway"]="Eisenbahn";
$lang_str["cat:agri_ind/resources"]="Ressourcengewinnung";
$lang_str["cat:agri_ind/landfill"]="Entsorgung";
$lang_str["cat:agri_ind/military"]="Militär";

$lang_str["sub_type=t3|type=historic"]="UNESCO Welterbe";
$lang_str["sub_type=|type=place_of_worship"]="Religiöser Ort";
$lang_str["sub_type=t1|type=place_of_worship"]="Christliche Kirche";
$lang_str["sub_type=t2|type=place_of_worship"]="Islamische Moschee";
$lang_str["sub_type=t3|type=place_of_worship"]="Jüdische Synagoge";
#$lang_str["sub_type=t4|type=place_of_worship"]="Sikh ?";

$lang_str["highway_type=motorway"]="Autobahn";
$lang_str["highway_type=trunk"]="Schnellstraße";
#$lang_str["highway_type=primary"]="Primary Road";
#$lang_str["highway_type=secondary"]="Secondary Road";
#$lang_str["highway_type=tertiary"]="Tertiary Road";
#$lang_str["highway_type=minor"]="Minor Road";
#$lang_str["highway_type=service"]="Service Road";
$lang_str["highway_type=pedestrian"]="Fußgängerzone";
#$lang_str["highway_type=track"]="Track";
#$lang_str["highway_type=path"]="Path (Foot, Cycle, Bridle)";
#$lang_str["square_type=pedestrian"]="Square";
$lang_str["square_type=parking"]="Parkzone";
$lang_str["highway_type=aero_run"]="Start- und Landebahn";
#$lang_str["highway_type=aero_taxi"]="Airport Taxiway";

$lang_str["sub_type=t1|type=communication"]="Postämter";
$lang_str["sub_type=t2|type=communication"]="Briefkasten";
$lang_str["sub_type=t1|type=economic"]="Geldautomat";
$lang_str["sub_type=t2|type=economic"]="Banken";
$lang_str["sub_type=t1|type=services"]="Recycling";
$lang_str["sub_type=t1|type=man_made"]="Turm";
$lang_str["sub_type=t2|type=man_made"]="Windkraftanlage";
$lang_str["sub_type=t3|type=man_made"]="Windmühle";
$lang_str["sub_type=t1|type=emergency"]="Krankenhäuser";
$lang_str["sub_type=t1|type=health"]="Apotheke";
$lang_str["sub_type=t1|type=tourism"]="Hotels, Hostels, ...";
$lang_str["sub_type=t2|type=tourism"]="Campingplatz";
$lang_str["sub_type=t3|type=tourism"]="Touristeninformation";

  // Foos & Drink
  $lang_str["list_food_drink"]="Essen und Trinken";
    $lang_str["list_amenity_biergarten"]="Biergärten";
    $lang_str["list_amenity_restaurant"]="Restaurants";
    $lang_str["list_amenity_fast_food"]="Fast Food-Restaurants";
    $lang_str["list_amenity_cafe"]="Cafes";
    $lang_str["list_amenity_vending_machine"]="Automaten";
    $lang_str["list_amenity_pub"]="Pubs";
    $lang_str["list_amenity_bar"]="Bars";
    $lang_str["list_amenity_nightclub"]="Nachtclubs";
    $lang_str["list_amenity_casino"]="Casinos";
// Leisure
  $lang_str["list_leisure"]="Freizeit";
    $lang_str["list_leisure_sports_centre"]="Sportzentren";
    $lang_str["list_leisure_golf_course"]="Golfplätze";
    $lang_str["list_leisure_stadium"]="Stadien";
#    $lang_str["list_leisure_track"]="Tracks";
#    $lang_str["list_leisure_pitch"]="Pitches";
#    $lang_str["list_leisure_water_park"]="Water Parks";
#    $lang_str["list_leisure_marina"]="Marinas";
#    $lang_str["list_leisure_slipway"]="Slipways";
#    $lang_str["list_leisure_fishing"]="Fishing";
    $lang_str["list_leisure_nature_reserve"]="Naturschutzgebiete";
    $lang_str["list_leisure_park"]="Parks";
    $lang_str["list_leisure_playground"]="Spielplätze";
    $lang_str["list_leisure_garden"]="Gärten";
#    $lang_str["list_leisure_common"]="Commons";
    $lang_str["list_leisure_ice_rink"]="Eisbahnen";
    $lang_str["list_leisure_miniature_golf"]="Minigolf";
    $lang_str["list_leisure_swimming_pool"]="Schwimmbecken";
#    $lang_str["list_leisure_beach_resort"]="Beach Resorts";
#    $lang_str["list_leisure_bird_hide"]="Bird Hides";
    $lang_str["list_leisure_sport"]="anderer Sport";
// Sport
#    $lang_str["list_sport_9pin"]="9pin Bowling";
#    $lang_str["list_sport_10pin"]="10pin Bowling";
#    $lang_str["list_sport_archery"]="Archery";
#    $lang_str["list_sport_athletics"]="Athletics";
#    $lang_str["list_sport_australian_football"]="Australian Football";
#    $lang_str["list_sport_baseball"]="Baseball";
#    $lang_str["list_sport_basketball"]="Basketball";
#    $lang_str["list_sport_beachvolleyball"]="Beachvolleyball";
#    $lang_str["list_sport_boules"]="Boules";
#    $lang_str["list_sport_bowls"]="Bowls";
#    $lang_str["list_sport_canoe"]="Canoe";
#    $lang_str["list_sport_chess"]="Chess";
#    $lang_str["list_sport_climbing"]="Climbing";
#    $lang_str["list_sport_cricket"]="Cricket";
#    $lang_str["list_sport_cricket_nets"]="Cricket Nets";
#    $lang_str["list_sport_croquet"]="Croquet";
#    $lang_str["list_sport_cycling"]="Cycling";
#    $lang_str["list_sport_diving"]="Diving";
#    $lang_str["list_sport_dog_racing"]="Dog Racing";
#    $lang_str["list_sport_equestrian"]="Equestrian";
#    $lang_str["list_sport_football"]="Football";
#    $lang_str["list_sport_golf"]="Golf";
#    $lang_str["list_sport_gymnastics"]="Gymnastics";
#    $lang_str["list_sport_hockey"]="Hockey";
#    $lang_str["list_sport_horse_racing"]="Horse Racing";
#    $lang_str["list_sport_korfball"]="Korfball";
#    $lang_str["list_sport_motor"]="Motor";
#    $lang_str["list_sport_multi"]="Multi";
#    $lang_str["list_sport_orienteering"]="Orienteering";
#    $lang_str["list_sport_paddle_tennis"]="Paddle Tennis";
#    $lang_str["list_sport_paragliding"]="Paragliding";
#    $lang_str["list_sport_pelota"]="Pelota";
#    $lang_str["list_sport_racquet"]="Racquet";
#    $lang_str["list_sport_rowing"]="Rowing";
    $lang_str["list_sport_rugby"]="Rugby";
    $lang_str["list_sport_shooting"]="Schießen";
    $lang_str["list_sport_skating"]="Skating";
    $lang_str["list_sport_skateboard"]="Skateboard";
    $lang_str["list_sport_skiing"]="Ski";
    $lang_str["list_sport_soccer"]="Fußball";
    $lang_str["list_sport_swimming"]="Schwimmen";
    $lang_str["list_sport_table_tennis"]="Tischtennis";
    $lang_str["list_sport_team_handball"]="Handball";
    $lang_str["list_sport_tennis"]="Tennis";
    $lang_str["list_sport_volleyball"]="Volleyball";
// Cycle & Hiking
    $lang_str["list_cycle_hiking"]="Rad- und Wandereinrichtungen";
    $lang_str["list_ch_routes"]="Rad- und Wanderwege";
    $lang_str["list_shop_bicycle"]="Fahrradgeschäfte";
    $lang_str["list_shop_outdoor"]="Outdoorläden";
    $lang_str["list_amenity_bicycle_rental"]="Fahrradvermietungen";
    $lang_str["list_amenity_bicycle_parking"]="Fahrradparkplätze";
    $lang_str["list_amenity_shelter"]="Schutzhütten";
    $lang_str["list_amenity_drinking_water"]="Trinkwasserstellen";
    $lang_str["list_amenity_signpost"]="Wegweiser";
#    $lang_str["list_amenity_alpine_hut"]="Alpine Huts";
#    $lang_str["list_tourism_alpine_hut"]="Alpine Huts";
#    $lang_str["list_amenity_mountain_hut"]="Mountain Huts";
#    $lang_str["list_tourism_picnic_site"]="Picnic Sites";
    $lang_str["list_tourism_viewpoint"]="Aussichtspunkte";
  // Tourism
  $lang_str["list_tourism"]="Tourismuseinrichtungen";
#    $lang_str["list_tourism_hotel"]="Hotels";
#    $lang_str["list_tourism_motel"]="Motels";
#    $lang_str["list_tourism_guest_house"]="Guest Houses";
#    $lang_str["list_tourism_hostel"]="Hostels";
#    $lang_str["list_tourism_chalet"]="Chalets";
#    $lang_str["list_tourism_camp_site"]="Camp Sites";
#    $lang_str["list_tourism_caravan_site"]="Caravan Sites";
#    $lang_str["list_tourism_information"]="Tourist Informations";
  // Attractions
  $lang_str["list_attractions"]="Attraktionen";
#    $lang_str["list_tourism_theme_park"]="Theme Parks";
#    $lang_str["list_tourism_zoo"]="Zoos";
#    $lang_str["list_tourism_attraction"]="Attractions";

#$lang_str["list_shopping"]="Shopping";
#  $lang_str["list_general"]="General";
#    $lang_str["list_shop_mall"]="Shopping Malls";
#    $lang_str["list_shop_shopping_center"]="Shopping Centers";
#    $lang_str["list_shop_shopping_centre"]="Shopping Centres";
#    $lang_str["list_shop_convenience"]="Convenience Stores";
#    $lang_str["list_shop_department_store"]="Department Stores";
#    $lang_str["list_shop_general"]="General Stores";
#    $lang_str["list_amenity_marketplace"]="Marketplaces";
#  $lang_str["list_food"]="Food";
#    $lang_str["list_shop_supermarket"]="Supermarkets";
#    $lang_str["list_shop_groceries"]="Groceries";
#    $lang_str["list_shop_grocery"]="Groceries";
#    $lang_str["list_shop_alcohol"]="Alcohol";
#    $lang_str["list_shop_bakery"]="Bakeries";
#    $lang_str["list_shop_beverages"]="Beverages";
#    $lang_str["list_shop_butcher"]="Butchers";
#    $lang_str["list_shop_organic"]="Organic Food";
#    $lang_str["list_shop_wine"]="Wine Shops";
#    $lang_str["list_shop_fish"]="Fish Shops";
#    $lang_str["list_shop_market"]="Markets";
#  $lang_str["list_sport"]="Sport";
#    $lang_str["list_shop_sports"]="General Sports";
#    $lang_str["list_shop_bicycle"]="Bicycle Shops";
#    $lang_str["list_shop_outdoor"]="Outdoor Shops";
  $lang_str["list_culture"]="Kultur";
#    $lang_str["list_shop_books"]="Book Shops";
#    $lang_str["list_shop_kiosk"]="Kiosks";
#    $lang_str["list_shop_video"]="Video Shops";
#    $lang_str["list_shop_newsagent"]="Newsagents";
#    $lang_str["list_shop_ticket"]="Ticket Sales";
#    $lang_str["list_shop_music"]="Music Shops";
#    $lang_str["list_shop_photo"]="Photo Shops";
#    $lang_str["list_shop_travel_agency"]="Travel Agencies";
#  $lang_str["list_car"]="Car &amp; Motorcycle";
#    $lang_str["list_shop_car"]="Car Shop";
#    $lang_str["list_shop_car_dealer"]="Car Dealers";
#    $lang_str["list_shop_car_repair"]="Car Repair";
#    $lang_str["list_shop_car_parts"]="Car Parts";
#    $lang_str["list_shop_motorcycle"]="Motorcycle Shops";
#  $lang_str["list_fashion"]="Fashion";
#    $lang_str["list_shop_clothes"]="Clothes";
#    $lang_str["list_shop_florist"]="Florists";
#    $lang_str["list_shop_hairdresser"]="Hair dressers";
#    $lang_str["list_shop_shoes"]="Shoe Shops";
#    $lang_str["list_shop_fashion"]="Fashion Shops";
#    $lang_str["list_shop_jewelry"]="Jewelries";
#    $lang_str["list_shop_apparel"]="Apparel Shops";
#    $lang_str["list_shop_second_hand"]="Second Hand Shops";
#  $lang_str["list_home_office"]="Home &amp; Office";
#    $lang_str["list_shop_computer"]="Computer Stores";
#    $lang_str["list_shop_doityourself"]="Do it yourself";
#    $lang_str["list_shop_electronics"]="Electronics";
#    $lang_str["list_shop_hardware"]="Hardware Shops";
#    $lang_str["list_shop_hifi"]="Hifi Shops";
#    $lang_str["list_shop_dry_cleaning"]="Dry Cleaning";
#    $lang_str["list_shop_furniture"]="Furniture Shops";
#    $lang_str["list_shop_garden_centre"]="Garden Centres";
#    $lang_str["list_shop_laundry"]="Laundries";
#    $lang_str["list_shop_stationery"]="Stationery Shops";
#    $lang_str["list_shop_toys"]="Toys";
#    $lang_str["list_shop_estate_agent"]="Estate Agents";
#    $lang_str["list_shop_pet"]="Pet Shops";
//$lang_str["list_health"]="Health";
#    $lang_str["list_shop_optician"]="Opticians";
#    $lang_str["list_shop_chemist"]="Chemists";
#    $lang_str["list_shop_drugstore"]="Drug Stores";
#    $lang_str["list_shop_pharmacy"]="Pharmacies";
#  $lang_str["list_othershops"]="Other";
#    $lang_str["list_shop_fixme"]="To be fixed";
#    $lang_str["list_shop_shop"]="Unknown Shops";
#    $lang_str["list_shop_other"]="Other Shops";
#    $lang_str["list_shop_vending_machine"]="Vending Machines";

$lang_str["list_education_culture"]="Bildung und Kultur";
#  $lang_str["list_culture"]="Culture";
#    $lang_str["list_amenity_arts_centre"]="Arts Centres";
#    $lang_str["list_amenity_theatre"]="Theatres";
#    $lang_str["list_tourism_museum"]="Museums";
#    $lang_str["list_tourism_artwork"]="Artworks";
#    $lang_str["list_amenity_fountain"]="Fountains";
#    $lang_str["list_amenity_cinema"]="Cinemas";
#    $lang_str["list_amenity_studio"]="TV/Radio/Recording Studios";
#    $lang_str["list_shop_trumpet"]="Music Shops";

  $lang_str["list_education"]="Bildung";
    $lang_str["list_amenity_university"]="Hochschulen";
#    $lang_str["list_amenity_college"]="Colleges";
    $lang_str["list_amenity_school"]="Schulen";
    $lang_str["list_amenity_preschool"]="Vorschulen";
    $lang_str["list_amenity_kindergarten"]="Kindergärten";
    $lang_str["list_amenity_library"]="Bibliotheken";
    $lang_str["list_shop_books"]="Buchläden";

  $lang_str["list_historic"]="Historische Stätten";
    $lang_str["list_historic_monument"]="Denkmäler";
    $lang_str["list_historic_castle"]="Burg";
    $lang_str["list_historic_ruins"]="Ruinen";
#    $lang_str["list_historic_icon"]="Icons";
#    $lang_str["list_historic_memorial"]="Memorial Sites";
#    $lang_str["list_historic_archaeological_site"]="Archaelogical Sites";
    $lang_str["list_historic_unesco_world_heritage"]="UNESCO Weltkulturerbestätten";
    $lang_str["list_historic_UNESCO_world_heritage"]="UNESCO Weltkulturerbestätten";
    $lang_str["list_historic_battlefield"]="Schlachtfelder";
    $lang_str["list_historic_wreck"]="Wracks";
#    $lang_str["list_historic_wayside_cross"]="Wayside Crosses";
#    $lang_str["list_historic_wayside_shrine"]="Wayside Shrines";

  $lang_str["list_religion"]="Religion";
#    $lang_str["list_amenity_place_of_worship"]="Places of Worship";
#    $lang_str["list_amenity_grave_yard"]="Grave Yards";
#    $lang_str["list_landuse_cemetery"]="Cemeteries";
    $lang_str["list_amenity_crematorium"]="Krematorien";
#    $lang_str["list_cemetery_grave"]="Graves";
#    $lang_str["list_amenity_grave"]="Graves";

$lang_str["list_services"]="Dienstleistungen";
  $lang_str["list_health"]="Gesundheit";
    $lang_str["list_amenity_hospital"]="Krankenhäuser";
#    $lang_str["list_amenity_doctor"]="Doctors";
#    $lang_str["list_amenity_doctors"]="Doctors";
#    $lang_str["list_amenity_dentist"]="Dentists";
#    $lang_str["list_amenity_pharmacy"]="Pharmacies";
#    $lang_str["list_amenity_veterinary"]="Veterinaries";
#    $lang_str["list_amenity_red_cross"]="Ambulance Services";
#    $lang_str["list_amenity_baby_hatch"]="Baby Hatch";

  $lang_str["list_public"]="Öffentliche Einrichtungen";
#    $lang_str["list_amenity_townhall"]="Townhalls";
    $lang_str["list_amenity_public_building"]="Öffentliche Gebäude";
    $lang_str["list_amenity_fire_station"]="Feuerwachen";
    $lang_str["list_amenity_police"]="Polizeiwachen";
#    $lang_str["list_amenity_embassy"]="Embassies";
#    $lang_str["list_amenity_courthouse"]="Court Houses";
    $lang_str["list_amenity_prison"]="Gefängnisse";

  $lang_str["list_communication"]="Kommunikation";
    $lang_str["list_amenity_telephone"]="Telefone";
#    $lang_str["list_amenity_emergency_phone"]="Emergency Phones";
    $lang_str["list_amenity_post_office"]="Postämter";
#    $lang_str["list_amenity_post_box"]="Briefkästen";
#    $lang_str["list_amenity_wlan"]="WLAN Accesspoints";
#    $lang_str["list_amenity_WLAN"]="WLAN Accesspoints";

  $lang_str["list_disposal"]="Entsorgung";
    $lang_str["list_amenity_recycling"]="Recyclinghöfe";
    $lang_str["list_amenity_toilets"]="Toiletten";
#    $lang_str["list_amenity_waste_disposal"]="Waste Disposals";

$lang_str["list_transport"]="Transport";
  $lang_str["list_car_motorcycle"]="Auto und Motorrad";
#    $lang_str["list_amenity_fuel"]="Fuel Stations";
#    $lang_str["list_amenity_car_rental"]="Car Rentals";
#    $lang_str["list_amenity_car_sharing"]="Car Sharings";
#    $lang_str["list_amenity_parking"]="Parkings";
#    $lang_str["list_shop_car"]="Car Shop";
#    $lang_str["list_shop_car_repair"]="Car Repair";

  $lang_str["list_pt_amenities"]="Einrichtungen des öff. Verkehrs";
#    $lang_str["list_amenity_taxi"]="Taxi Stations";
    $lang_str["list_amenity_ticket_counter"]="Fahrkartenschalter";

  $lang_str["list_pt_stops"]="Haltestellen des öff. Verkehrs";
  $lang_str["list_pt_routes"]="Routen des öff. Verkehrs";

#  $lang_str["list_pipes"]="Goods (Pipes, Power, ...)";
#    $lang_str["list_power_line"]="Power lines";
#    $lang_str["list_man_made_pipeline"]="Pipelines";

$lang_str["list_places"]="Orte";
#  $lang_str["list_streets"]="Street Directory";
#  $lang_str["list_nature_recreation"]="Nature &amp; Recreation";
#    $lang_str["list_leisure_park"]="Parks";
#    $lang_str["list_leisure_nature_reserve"]="Nature Reserves";
#    $lang_str["list_leisure_common"]="Commons";
#    $lang_str["list_leisure_garden"]="Gardens";
#  $lang_str["list_natural"]="Natural Formations";
#    $lang_str["list_natural_peaks"]="Peaks";
#    $lang_str["list_natural_spring"]="Springs";
#    $lang_str["list_natural_glacier"]="Glaciers";
#    $lang_str["list_natural_volcano"]="Volcanos";
#    $lang_str["list_natural_cliff"]="Cliffs";
#    $lang_str["list_natural_scree"]="Screes";
#    $lang_str["list_natural_fell"]="Fells";
#    $lang_str["list_natural_heath"]="Heaths";
#    $lang_str["list_natural_wood"]="Woods";
#    $lang_str["list_landuse_forest"]="Forests";
#    $lang_str["list_natural_marsh"]="Marshes";
#    $lang_str["list_natural_wetland"]="Wetland";
#    $lang_str["list_natural_water"]="Lakes, etc.";
#    $lang_str["list_natural_beach"]="Beaches";
#    $lang_str["list_natural_bay"]="Bays";
#    $lang_str["list_natural_land"]="Islands";
#    $lang_str["list_natural_cave_entrance"]="Cave Entrances";
#    $lang_str["list_natural_tree"]="Trees";

#$lang_str["list_industry"]="Industry";
#$lang_str["list_power"]="Power";
#  $lang_str["list_power_generator"]="Power Generators";
#  $lang_str["list_power_station"]="Power Stations";
#  $lang_str["list_power_sub_station"]="Power Substations";
#$lang_str["list_works"]="Works";
#  $lang_str["list_landuse_industrial"]="Industrial Areas";
#  $lang_str["list_man_made_works"]="Works";

#$lang_str["route_international"]="International Routes";
#$lang_str["route_national"]="National Routes";
#$lang_str["route_region"]="Regional Routes";
#$lang_str["route_urban"]="Urban Routes";
#$lang_str["route_suburban"]="Suburban Routes";
#$lang_str["route_local"]="Local Routes";
#$lang_str["route_no"]="No routes found";
#$lang_str["route_zoom"]="Zoom in for list of routes";

#$lang_str["station_type_amenity_bus_station"]="Bus Station";
#$lang_str["station_type_amenity_ferry_terminal"]="Ferry Terminal";
#$lang_str["station_type_highway_bus_stop"]="Bus Stop";
#$lang_str["station_type_railway_tram_stop"]="Tram Stop";
#$lang_str["station_type_railway_station"]="Railway Station";
#$lang_str["station_type_railway_halt"]="Railway Halt";
// ATTENTION: the last >400 language strings are deprecated


// The following $lang_str are not defined in www/lang/en.php and might be 
// deprecated/mislocated/wrong:
$lang_str["result_no"]="nichts gefunden";
$lang_str["place_continent"]="Kontinent";
$lang_str["place_country"]="Staat";
$lang_str["place_state"]="Land";
$lang_str["place_region"]="Region";
$lang_str["place_county"]="Kreis, Bezirk";
$lang_str["place_city"]="Großstadt";
$lang_str["place_town"]="Stadt";
$lang_str["place_village"]="Dorf";
$lang_str["place_hamlet"]="Weiler";
$lang_str["place_suburb"]="Ortsteil";
$lang_str["place_locality"]="Ort";
$lang_str["place_island"]="Insel";
$lang_str["tag_place"]="Ort";
$lang_str["tag_operator"]="Betreiber";
$lang_str["tag_population"]="Bevölkerung";
$lang_str["tag_is_in"]="Befindet sich in";
$lang_str["tag_website"]="Homepage";
$lang_str["tag_address"]="Adresse";
$lang_str["tag_capital"]="Hauptstadt";
$lang_str["tag_note"]="Interne Notiz";
$lang_str["tag_stops"]="Haltestellen";
$lang_str["tag_religion"]="Religion";
$lang_str["tag_denomination"]="Denomination";
$lang_str["tag_amenity"]="Einrichtung";
$lang_str["amenity_grave_yard"]="Friedhof";
$lang_str["amenity_cemetery"]="Friedhof";
$lang_str["christian"]="christlich";
$lang_str["muslim"]="muslimisch";
$lang_str["catholic"]="katholisch";
$lang_str["tag:amenity=restaurant"]=array("Restaurant", "Restaurants");
$lang_str["cat:industry"]="Industrie";
$lang_str["cat:industry/power"]="Energie";
$lang_str["cat:industry/works"]="Fabriken";

$lang_str["main:map_key"]="Legende";
$lang_str["main:options"]="Optionen";
$lang_str["main:about"]="Impressum";
$lang_str["main:donate"]="Spende";
$lang_str["main:licence"]="Kartendaten: <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">cc-by-sa</a> <a href=\"http://www.openstreetmap.org\">OpenStreetMap</a>-Mitwirkende | OSB: <a href=\"http://wiki.openstreetmap.org/wiki/User:Skunk\">Stephan Plepelits</a> und <a href=\"http://wiki.openstreetmap.org/wiki/OpenStreetBrowser#People_involved\">Mitwirkende</a>";
$lang_str["main:permalink"]="Permalink";

$lang_str["help:no_object"]="Ein Objekt mit der ID \"%s\" konnte nicht gefunden werden. Das kann eine (oder mehrere) der folgenden Ursachen haben:<ul><li>Die ID ist falsch.</li><li>Das Objekt wurde von einer anderen Applikation identifiziert und ist im OpenStreetBrowser (noch) nicht verfügbar</li><li>Das Objekt liegt ausserhalb des unterstützten Gebiets</li><li>Der Link, dem Du gefolgt bist, war alt und das Objekt wurde inzwischen aus der OpenStreetMap gelöscht.</li>";

$lang_str["user:login"]="Anmelden";
$lang_str["user:logged_in_as"]="Angemeldet als ";
$lang_str["user:logout"]="Abmelden";

// please finish this list, see list.php for full list of languages
$lang_str["lang:de"]="Deutsch";
$lang_str["lang:bg"]="Bulgarisch";
$lang_str["lang:en"]="Englisch";
$lang_str["lang:es"]="Spanisch";
$lang_str["lang:it"]="Italienisch";
