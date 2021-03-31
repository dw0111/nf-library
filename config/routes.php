<?php

use App\Controller\HomeController;
use App\Controller\CategoryController;
use App\Controller\ItemController;
use App\Controller\CartController;

return [
  ['GET', '/', [HomeController::class, 'show']],
  ['GET', '/categories/{id}', [CategoryController::class, 'show']],
  ['GET', '/item/{id}', [ItemController::class, 'show']],
  ['GET', '/cart', [CartController::class, 'show']],
  ['POST', '/cart/{id}', [CartController::class, 'add']],
  ['GET', '/cart/success', [CartController::class, 'confirm']],
  ['POST', '/borrow', [CartController::class, 'borrow']],
];
