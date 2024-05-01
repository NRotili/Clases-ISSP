<?php

require_once '../autoload.php';

use Lib\Route;
use App\Controllers\PrecioController;

Route::get('/precios/:code', [PrecioController::class, 'show']);

Route::dispatch();
