<?php

use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'getTopTen');

$router->get('/region', HomeController::class, 'filterByRegion');

$router->get('/name', HomeController::class, 'getCountry');

$router->get('/names', HomeController::class, 'getCountriesNames');

$router->dispatch();