<?php

namespace App\Core;

use App\Controllers\HomeController;

class Router
{
    public function dispatch()
    {
        $controller = new HomeController();

        $controller->index();
    }
}