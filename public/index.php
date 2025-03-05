<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Ryanprtma\MvcApp\Controller\AuthController;
use Ryanprtma\MvcApp\Controller\CharacterController;
use Ryanprtma\MvcApp\Controller\HomeController;
use Ryanprtma\MvcApp\Controller\UserController;
use Ryanprtma\MvcApp\Router;

Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/users/register', UserController::class, 'register', []);
Router::add('POST', '/users/register', UserController::class, 'signUp', []);
Router::add('GET', '/users/edit', UserController::class, 'edit', []);
Router::add('POST', '/users/update', UserController::class, 'update', []);
Router::add('GET', '/users/login', AuthController::class, 'login', []);
Router::add('POST', '/users/login', AuthController::class, 'authenticate', []);
Router::add('GET', '/users/logout', AuthController::class, 'logout', []);

Router::add('GET', '/character/form', CharacterController::class, 'form', []);
Router::add('POST', '/character/analyze', CharacterController::class, 'analyze', []);

Router::run();