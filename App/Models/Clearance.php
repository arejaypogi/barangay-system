<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Clearance extends Database{

    public function create($data){
        $sql = "INSERT INTO clearances (citizen_id, clearance_no, purpose, issued_date) VALUES (:citizen_id, :clearance_no, :purpose, :issued_date)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute($data);
    }

    public function getLastId(){
        $stmt = $this->conn->query(
            "SELECT MAX(id) last_id FROM clearances");

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}