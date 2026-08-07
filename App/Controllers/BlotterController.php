<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Blotter;
use App\Models\Citizen;

class BlotterController extends Controller{

    public function index(){
        $blotter = new Blotter();

        $blotters = $blotter->getAll();
        

        require_once __DIR__ . '/../Views/blotters/index.php';    
    }

    public function create(){
        $citizenModel = new Citizen();

        $citizens = $citizenModel->getAll();

        require_once __DIR__ . '/../Views/blotters/create.php';
    }

    public function store(){
        $blotter = new Blotter();

        $blotter->create(['blotter_no'=> $blotter->generateNumber(),
            'complainant_id'=> $_POST['complainant_id'],
            'respondent_id' => $_POST['respondent_id'],
            'incident_type' => $_POST['incident_type'],
            'incident_time' => $_POST['incident_time'],
            'incident_date' => $_POST['incident_date'],
            'incident_location' => $_POST['incident_location'],
            'description' => $_POST['description'],
            'status' => 'Pending']);

        header("Location: /barangay-system/public/blotters");

        exit;
    }

    public function show(){
        $blotters = new Blotter();

        $record = $blotters->find($_GET['id']);


        require_once __DIR__ . '/../Views/blotters/show.php';
    }


}