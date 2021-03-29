<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FastRoute;


class Kernel
{
  private FastRoute\Dispatcher $dispatcher;

  public function __construct(string $environment)
  {
    $this->initErrorHandler($environment);
    $this->initDispatcher();
  }

  private function initErrorHandler(string $environment): void
  {
    $whoops = new \Whoops\Run;

    if ($environment === 'dev') {
      error_reporting(E_ALL);
      $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
      $whoops->register();
    } else {
      error_reporting(E_ERROR);
      $whoops->pushHandler(function () {
        $response = new Response('Internal server error', 500);
        $response->send();
      });
    }
  }

  private function initDispatcher()
  {
    $this->dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
      $routes = require __DIR__ . '/../config/routes.php';

      foreach ($routes as $route) {
        $r->addRoute($route[0], $route[1], $route[2],);
      }
    });
  }

  public function handle(Request $request): Response
  {
    $httpMethod = $request->getMethod();
    $uri = $request->getRequestUri();
    $routeInfo = $this->dispatcher->dispatch($httpMethod, $uri);

    $response = new Response();

    if ($routeInfo[0] === FastRoute\Dispatcher::FOUND) {
      $content = call_user_func($routeInfo[1], $routeInfo[2]);
      $response->setContent($content);
    }

    if (!$response->getContent()) {
      $response = new Response('404 - Not found', 404);
    }
    return $response;
  }
}
