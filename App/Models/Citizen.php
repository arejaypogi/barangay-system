<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Citizen extends Database {
    public function getAll(){
        $sql = "SELECT * FROM citizens ORDER By id DESC";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data){
        $sql = "INSERT INTO citizens(
            first_name,
            middle_name,
            last_name,
            gender,
            birthday,
            birth_place,
            civil_status,
            religion,
            occupation,
            contact_number,
            zone,
            email,
            photo
        )
        VALUES
        (
            :first_name,
            :middle_name,
            :last_name,
            :gender,
            :birthday,
            :birth_place,
            :civil_status,
            :religion,
            :occupation,
            :contact_number,
            :zone,
            :email,
            :photo
        )";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute($data);
    }

    public function find($id){
        $sql = "SELECT * FROM citizens WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function update($id, $data){
        $sql = "UPDATE citizens SET
            first_name = :first_name,
            middle_name = :middle_name,
            last_name = :last_name,
            gender = :gender,
            birthday = :birthday,
            birth_place = :birth_place,
            civil_status = :civil_status,
            religion = :religion,
            occupation = :occupation,
            contact_number = :contact_number,
            zone = :zone,
            email = :email
            
            WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $data['id'] = $id;

            return $stmt->execute($data);
    }

    public function delete($id){
        $sql = "DELETE FROM citizens WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute(['id' => $id]);
    }
}
