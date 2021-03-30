<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class CartController extends AbstractController
{
  public function show(): Response
  {
    return $this->render('cart');
  }

  public function add()
  {
    return file_get_contents(__DIR__ . '/../../templates/cart.html');
  }

  public function confirm()
  {
    return file_get_contents(__DIR__ . '/../../templates/success.html');
  }

  public function borrow()
  {
    return "Borrow a book";
  }
}
