<?php

namespace Ryanprtma\MvcApp\Base;
class View
{
    public static function render(string $view, $data = []): void
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }
}