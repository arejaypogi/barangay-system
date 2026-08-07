<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Blotter extends Database{

    public function getAll(){
        $stmt= $this->conn->query("SELECT b.*, 
            c1.first_name AS complainant_first,
            c1.last_name AS complainant_last,
            c2.first_name AS respondent_first,
            c2.last_name AS respondent_last
            FROM blotters b LEFT JOIN citizens c1
            ON b.complainant_id = c1.id
        LEFT JOIN citizens c2
            ON b.respondent_id = c2.id
        ORDER BY b.id DESC");

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data){
        $stmt = $this->conn->prepare("INSERT INTO blotters (blotter_no, complainant_id, respondent_id, incident_type, incident_date, incident_time, incident_location, description, status) VALUES (:blotter_no, :complainant_id, :respondent_id, :incident_type, :incident_date, :incident_time, :incident_location, :description, :status)");

       

        return $stmt->execute($data);
    }

    public function generateNumber(){
        $stmt = $this->conn->query("SELECT MAX(id) last_id FROM blotters");

        $last = $stmt->fetch(PDO::FETCH_ASSOC);

        $next = ($last['last_id'] ?? 0) +1;

        return 'BL-' . date('Y') . '-' . str_pad($next, 4, '0', STR_PAD_LEFT);
    }

    public function find($id){
        $stmt = $this->conn->prepare("SELECT b.*, 
            c1.first_name AS complainant_first,
            c1.last_name AS complainant_last,
            c2.first_name AS respondent_first,
            c2.last_name AS respondent_last
            FROM blotters b LEFT JOIN citizens c1
            ON b.complainant_id = c1.id
        LEFT JOIN citizens c2
            ON b.respondent_id = c2.id WHERE b.id = :id");

            $stmt->execute(['id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}