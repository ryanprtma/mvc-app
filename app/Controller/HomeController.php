<?php

namespace Ryanprtma\MvcApp\Controller;

use Ryanprtma\MvcApp\Base\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $user = $this->session->current();
        if ($user == null) {
            $this->view('Home/index', [
                "title" => "PHP Login Management"
            ]);
        } else {
            $this->view('Home/dashboard', [
                "title" => "Dashboard",
                "user" => [
                    "name" => $user->name
                ]
            ]);
        }
    }
}