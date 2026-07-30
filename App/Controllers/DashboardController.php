<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Citizen;
use App\Models\Official;
use App\Models\Document;
use App\Models\Household;
use App\Models\HouseholdMember;

class DashboardController extends Controller{
    public function index() {
        $citizen = new Citizen();
        $official = new Official();
        $document = new Document();
        $household = new Household();
        

        $totalCitizens = $citizen->total();
        $male = $citizen->maleCount();
        $female = $citizen->femaleCount();
        $senior = $citizen->seniorCount();
        $voters = $citizen->voterCount();

        $household = $household->total();

        $documents = $document->total();

        $zone = $citizen->citizenByZone();

        $recentDocuments = $document->recent();

        require_once __DIR__ .
            '/../Views/dashboard/index.php';
    }
}