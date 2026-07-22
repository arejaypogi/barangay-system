<?php

namespace App\Core;

class Controller
{
    public function view($view)
    {
        require_once __DIR__ . "/../Views/$view.php";
    }
}