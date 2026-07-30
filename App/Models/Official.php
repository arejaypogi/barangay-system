<?php

namespace App\Models;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class Official extends Database{
    public function getAll(){
        $sql = "SELECT * FROM barangay_officials ORDER By id DESC";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data){
        $sql = "INSERT INTO barangay_officials
        (
            first_name,
            middle_name,
            last_name,
            gender,
            birthdate,
            contact_number,
            address,
            position,
            committee,
            term_start,
            term_end,
            photo,
            signature,
            status
        )
        VALUES
        (
            :first_name,
            :middle_name,
            :last_name,
            :gender,
            :birthdate,
            :contact_number,
            :address,
            :position,
            :committee,
            :term_start,
            :term_end,
            :photo,
            :signature,
            :status  
        )";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute($data);

    }

    public function find($id){
        $stmt = $this->conn->prepare(
            $sql = "SELECT * FROM barangay_officials WHERE id= :id");
        
        $stmt->execute(['id'=>$id]);

        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete($id){
    $stmt = $this->conn->prepare(
        "DELETE FROM barangay_officials WHERE id = :id");
    
    return $stmt->execute(['id'=>$id]);
    }

    public function getActiveCaptain(){
    $stmt = $this->conn->prepare(
        "SELECT * FROM barangay_officials WHERE position='Barangay Captain' AND status='Active' LIMIT 1");
    
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}