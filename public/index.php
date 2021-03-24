<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$request = Request::createFromGlobals();
$response = new Response('404 - Not found', 404);
$routes = require __DIR__ . '/../config/routes.php';

$verb = $_SERVER['REQUEST_METHOD'];


foreach ($routes as $route) {
  if ($request->getMethod() === $route[0] && $request->getRequestUri() === $route[1]) {
    $content = call_user_func($route[2]);
    $response->setContent($content);
  }
}

if (!$response->getContent()) {
  http_response_code(404);
  $response = new Response('404 - Not found', 404);
}

$response->send();
