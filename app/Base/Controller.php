<?php

namespace Ryanprtma\MvcApp\Base;

abstract class Controller
{

    abstract public function index(): void;

    public function view(string $view, $data = []): void
    {
        View::render($view, $data);
    }
}