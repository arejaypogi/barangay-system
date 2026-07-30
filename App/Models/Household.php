<?php

namespace App\Models;

use App\Core\Database;
use PDO;


class Household extends Database{
    public function getAll(){
        $stmt = $this->conn->query("SELECT * FROM households ORDER By Id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data){
        $stmt = $this->conn->prepare("INSERT INTO households( household_no, household_head_id, address, zone) VALUES (:household_no, :household_head_id, :address, :zone)");

        return $stmt->execute($data);
    }

    public function total()
        {
            return $this->conn->query("SELECT COUNT(*) total FROM households")->fetch(PDO::FETCH_ASSOC);
    }

    public function find($id)
        {
            $stmt = $this->conn->prepare(
                "SELECT h.*,
                        c.first_name,
                        c.last_name
                FROM households h
                LEFT JOIN citizens c
                ON h.household_head_id = c.id
                WHERE h.id = :id"
            );

            $stmt->execute([
                'id'=>$id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

}