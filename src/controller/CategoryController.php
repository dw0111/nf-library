<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('category');
  }
}
