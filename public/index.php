<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$number = 42 / 0;

$uri = $_SERVER['REQUEST_URI'];
$verb = $_SERVER['REQUEST_METHOD'];
$routes = require __DIR__ . '/../config/routes.php';
$response = '404 - Not found';

foreach ($routes as $route) {
  if ($verb === $route[0] && $uri === $route[1]) {
    $response = call_user_func($route[2]);
  }
}


echo $response;
