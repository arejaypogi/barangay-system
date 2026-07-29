<?php

namespace App\Controllers;

use App\Core\Controller;

class OfficialController extends Controller{
    public function index(){
        $this->view('officials/index');
    }
}