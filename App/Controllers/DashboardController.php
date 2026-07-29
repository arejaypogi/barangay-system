<?php

namespace App\Controllers;

use App\Core\Controller;

class DashboardController extends Controller{
    public function index() {
        if (!isset($_SESSION['user'])) {
            header("Location: /barangay-system/public/login");

            exit;
        }

        $this->view('dashboard/index');
    }
}