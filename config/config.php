<?php

require_once ("../lib/config.class.php");

Config::set('site_name', 'Your Site Name');

Config::set('Lunguages', array('en','fr'));

//Routes. Route name => method prefix

Config::set('routes', array(

'default' => '',
'admin' => 'admin' 
));
Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

?>