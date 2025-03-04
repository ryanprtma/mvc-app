<?php

namespace Ryanprtma\MvcApp\Middleware;

use Ryanprtma\MvcApp\Middleware\Middleware;

class AuthMiddleware implements Middleware
{

    function before(): void
    {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /users/login');
            exit();
        }
    }
}