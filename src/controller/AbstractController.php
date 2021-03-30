<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
  protected Request $request;
  protected Response $response;

  public function __construct()
  {
    $this->request = Request::createFromGlobals();
    $this->response = new Response();
  }

  protected function render(string $view): Response
  {
    // load view and set as content
    $template = file_get_contents(__DIR__ . "/../../templates/$view.html");
    $this->response->setContent($template);
    return $this->response;
  }

  protected function json(mixed $data): Response
  {
    // set content type header
    // encode data and set as content
    $this->response->headers->set('content-type-application', 'json');
    $this->response->setContent();
    return $this->response;
  }

  protected function notFound(string $message): Response
  {
    $this->response->setContent($message, 404);

    return $this->response;
  }

  protected function redirect(string $url): Response
  {
    $this->response->setStatusCode(302);
    $this->response->headers->set('Location', $url);

    return $this->response;
  }
}
