<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Ryanprtma\MvcApp\Router;


Router::add('GET', '/', '', 'index');

Router::run();