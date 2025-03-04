<?php

namespace Ryanprtma\MvcApp\Middleware;

interface Middleware
{
    function before(): void;
}