<?php

require("../lib/app.class.php");
define('DS', DIRECTORY_SEPARATOR);
//echo '</br>'.DS;
define('ROOT', dirname(dirname(__FILE__)));
//echo '</br>'.ROOT;
require_once(ROOT.DS.'lib'.DS.'init.php');
echo '</br> test';


App::run($_SERVER['REQUEST_URI']);
echo '</br> test2';
$router = new Router($_SERVER['REQUEST_URI']);

/*$uri = $_SERVER['REQUEST_URI'];
print_r($uri);*/

/*echo'<pre>';
print_r('Route :'.$router->getRoute().PHP_EOL);
print_r('lunguage :'.$router->getLunguage().PHP_EOL);
print_r('Controller :'.$router->getController().PHP_EOL);
print_r('Action to be called :'.$router->getAction().PHP_EOL);
echo "</br>Params";
print_r('params : '.$router->getParams());*/




echo '</br> fin';



