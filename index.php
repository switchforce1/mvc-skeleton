<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require 'vendor/autoload.php';

var_dump($_GET);
die();

$router  = new App\Router\Router($_GET['url']);

require 'app/routes.php';

$router->run();

