<?php

namespace App\Core;

use App\Controllers\AuthController;
use App\Controllers\CitizenController;
use App\Controllers\OfficialController;
use App\Controllers\HomeController;
use App\Controllers\DashboardController;
use App\Controllers\ClearanceController;
use App\Models\Clearance;

class Router{
    public function dispatch(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $basePath = '/barangay-system/public';

        $uri = str_replace($basePath, '', $uri);

        switch ($uri) {
            case '':
            case '/':
                (new HomeController())->index();
                break;

            case '/login':
                (new AuthController())->login();
                break;

            case '/logout':
                (new AuthController())->logout();
                break;

            case '/dashboard':
                (new DashboardController())->index();
                break;

            case '/citizens':
                (new CitizenController())->index();
                break;

            case '/citizens/create':
                (new CitizenController())->create();
                break;

            case '/citizens/store':
                (new CitizenController())->store();
                break;

            case '/citizens/show':
                (new CitizenController())->show();
                break;

            case '/citizens/edit':
                (new CitizenController())->edit();
                break;

            case '/citizens/update':
                (new CitizenController())->update();
                break;

            case '/citizens/delete':
                (new CitizenController())->delete();
                break;

            case '/officials':
                (new OfficialController())->index();
                break;

            case '/officials/create':
                (new OfficialController())->create();
                break;

            case '/officials/store':
                (new OfficialController())->store();
                break;

            case '/clearance/create':
                (new ClearanceController())->create();
                break;

            case '/clearance/generate':
                (new ClearanceController())->generate();
                break;

            default:
                echo "<h1>404 Not Found</h1>";
        }
    }
}
