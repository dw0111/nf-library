<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController
{
  protected Request $request;
  protected Response $response;
  protected Environment $twig;

  public function __construct(Request $request, Response $response, Environment $twig)
  {
    $this->request = $request;
    $this->response = $response;
    $this->twig = $twig;
  }

  protected function render(string $view, array $params): Response
  {
    // load view and set as content
    $template = $this->twig->render($view, $params);
    $this->response->setContent($template);
    return $this->response;
  }

  protected function json(mixed $data): Response
  {
    // set content type header
    // encode data and set as content
    $this->response->headers->set('Content-Type', 'application/json');
    $this->response->setContent(json_encode($data));

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
