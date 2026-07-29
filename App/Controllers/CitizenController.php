<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Citizen;

class CitizenController extends Controller{
    public function index(){
        $citizen = new Citizen();

        $citizens = $citizen->getAll();

        require_once __DIR__ . '/../Views/citizens/index.php';
    }

    public function create(){
        $this->view('citizens/create');
    }

    public function store(){
        $photo = '';

        if(!empty($_FILES['photo']['name'])){
            $photo = time() . '_' . $_FILES['photo']['name'];

            move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . '/../../public/uploads/' . $photo);
        }

        $citizen = new Citizen();

         $citizen->create([
            'first_name' => $_POST['first_name'],
            'middle_name' => $_POST['middle_name'],
            'last_name' => $_POST['last_name'],
            'gender' => $_POST['gender'],
            'birthday' => $_POST['birthday'],
            'birth_place' => $_POST['birth_place'],
            'civil_status' => $_POST['civil_status'],
            'religion' => $_POST['religion'],
            'occupation' => $_POST['occupation'],
            'contact_number' => $_POST['contact_number'],
            'zone' => $_POST['zone'],
            'email' => $_POST['email'],
            'photo' => $photo
        ]);   

        header("Location: /barangay-system/public/citizens");

        exit;
    }

    public function show(){
        $id = $_GET['id'];

        $citizen = new Citizen();

        $row = $citizen->find($id);

        require_once __DIR__ . '/../Views/citizens/show.php';
    }

    public function edit(){
        $id = $_GET['id'];

        $citizen = new Citizen();

        $row = $citizen->find($id);

        require_once __DIR__ . '/../Views/citizens/edit.php';
    }


    public function update(){
        $id = $_POST['id'];

        $citizen = new Citizen();

        $citizen->update($id, [
            'first_name' => $_POST['first_name'],
            'middle_name' => $_POST['middle_name'],
            'last_name' => $_POST['last_name'],
            'gender' => $_POST['gender'],
            'birthday' => $_POST['birthday'],
            'birth_place' => $_POST['birth_place'],
            'civil_status' => $_POST['civil_status'],
            'religion' => $_POST['religion'],
            'occupation' => $_POST['occupation'],
            'contact_number' => $_POST['contact_number'],
            'zone' => $_POST['zone'],
            'email' => $_POST['email']
        ]);

        header("Location: /barangay-system/public/citizens");
    }

    public function delete(){
        $id = $_GET['id'];

        $citizen = new Citizen();

        $citizen->delete($id);

        header("Location: /barangay-system/public/citizens");

        exit;
    }
}