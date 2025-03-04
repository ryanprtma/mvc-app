<?php

namespace Ryanprtma\MvcApp\Base;

use Ryanprtma\MvcApp\Common\Session;
use Ryanprtma\MvcApp\Config\Database;

abstract class Controller
{
    protected Session $session;

    public function __construct()
    {
        $this->session = new Session();
    }


    abstract public function index(): void;

    public function view(string $view, $data = []): void
    {
        View::render($view, $data);
    }
}