<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ItemController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('item');
  }
}
