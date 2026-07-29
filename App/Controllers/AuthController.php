<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller{
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();

            $user = $userModel->findByUsername($_POST['username']);

        if ($user && password_verify($_POST['password'], $user['password']))
            {
                $_SESSION['user'] = ['id' => $user['id'], 'fullname' => $user['fullname'], 'role' => $user['role']];

                header("Location: /barangay-system/public/dashboard");
                exit;
            }

            echo "Invalid Username or Passwod";
            return;
        }

        $this->view('auth/login');
    }

    public function logout(){
        session_destroy();

        header("Location: /barangay-system/public/login");

        exit;
    }
}