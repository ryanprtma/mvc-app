<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Ryanprtma\MvcApp\Controller\HomeController;
use Ryanprtma\MvcApp\Middleware\AuthMiddleware;
use Ryanprtma\MvcApp\Router;

Router::add('GET', '/', HomeController::class, 'index', [AuthMiddleware::class]);

Router::run();