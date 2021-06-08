<?php


define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__ . DS);
//Show errors
//===================================
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//===================================

require BASE_PATH . 'vendor/autoload.php';

$app = System\App::instance();
$app->request = System\Request::instance();
$app->route = System\Route::instance($app->request);

$route = $app->route;

require 'app/config/database.php';
require 'app/routes/api.php';

$route->end();
//require  'database.php';
//require  'api.php';
//require  'vendor/autoload.php';