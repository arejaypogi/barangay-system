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

    public function generateNumber()
    {
        $stmt = $this->conn->query(
            "SELECT MAX(id) last_id
            FROM households"
        );

        $last =
            $stmt->fetch(PDO::FETCH_ASSOC);

        $next =
            ($last['last_id'] ?? 0) + 1;

        return 'HH-' .
            date('Y') .
            '-' .
            str_pad(
                $next,
                4,
                '0',
                STR_PAD_LEFT
            );
    }
    
}