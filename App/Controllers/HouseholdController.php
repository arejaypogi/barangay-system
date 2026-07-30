<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Household;
use App\Models;
use App\Models\HouseholdMember;
use App\Models\Citizen;

class HouseholdController extends Controller{

    public function index(){
        $householdModel = new Household();

        $households = $householdModel->getAll();


        require_once __DIR__ . '/../Views/households/index.php';
    }

    public function create(){
        $citizen = new citizen();

        $citizen = $citizen->getAll();

        require_once __DIR__ . '/../Views/households/create.php';
    }

    public function store(){
        $household = new Household();

        $household->create(['household_no' => $_POST['household_no'],
            'household_head_id' => $_POST['household_head_id'],
            'address' => $_POST['address'],
            'zone' => $_POST['zone']]);

            header("Location: /barangay-system/public/households");
    }

    public function show()
        {
            $household = new Household();

            $member = new HouseholdMember();

            $row = $household->find(
                $_GET['id']
            );

            $members =
                $member->getMembers(
                    $_GET['id']
                );

            require_once __DIR__ .
                '/../Views/households/show.php';
    }

}