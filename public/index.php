<?php
require_once "../vendor/autoload.php";
require_once "../vendor/base/libs/helper.php";

use base\core\Router;
define('APP',dirname(__DIR__).'/app');
define('ROOT',dirname(__DIR__));
$uri = rtrim($_SERVER['QUERY_STRING'], '/');

$router = new Router();

Router::add('^$',['controller' => 'Main' ,'action' => 'index']);
Router::add('^addproduct$',['controller' => 'Main' ,'action' => 'create']);

Router::run($uri);