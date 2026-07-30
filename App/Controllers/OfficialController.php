<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Official;

class OfficialController extends Controller{
    
    public function index(){
        $official = new Official();

        $official = $official->getAll();

        require_once __DIR__ . '/../Views/officials/index.php';
    }

    public function create(){
        $this->view('officials/create');
    }

    public function store(){
        $photo = '';
        $signature = '';

        if(!empty($_FILES['photo']['name'])){
            $photo = time(). '_' . $_FILES['photo']['name'];

            move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . '/../../public/uploads/' .$photo);
        }

        if(!empty($_FILES['signature']['name'])){
            $signature = 'sign_' . time() . '_' . $_FILES['signature']['name'];

            move_uploaded_file($_FILES['signature']['tmp_name'], __DIR__ . '/../../public/uploads/' .$signature);
        }

        $official = new Official();

        $official->create([
            'first_name' => $_POST['first_name'],
            'middle_name' => $_POST['middle_name'],
            'last_name' => $_POST['last_name'],
            'gender' => $_POST['gender'],
            'birthdate' => $_POST['birthdate'],
            'contact_number' => $_POST['contact_number'],
            'address' => $_POST['address'],
            'position' => $_POST['position'],
            'committee' => $_POST['committee'],
            'term_start' => $_POST['term_start'],
            'term_end' => $_POST['term_end'],
            'photo' => $photo,
            'signature' => $signature,
            'status' => $_POST['status']
        ]);

        header(
            "Location: /barangay-system/public/officials"
        );

        exit;
    }
}
        
