<?php

namespace App\Controller;

class CartController
{
  public static function show()
  {
    return file_get_contents(__DIR__ . '/../../templates/cart.html');
  }

  public static function add()
  {
    return file_get_contents(__DIR__ . '/../../templates/cart.html');
  }

  public static function confirm()
  {
    return file_get_contents(__DIR__ . '/../../templates/success.html');
  }

  public static function borrow()
  {
    return "Borrow a book";
  }
}
