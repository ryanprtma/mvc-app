<?php

namespace Ryanprtma\MvcApp\Base;
class View
{
    public static function render(string $view, $data = []): void
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }

    public static function redirect(string $url): void
    {
        header("Location: $url");
        if (getenv("mode") != "test") {
            exit();
        }
    }
}