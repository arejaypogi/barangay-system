<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class HouseholdMember extends Database
{
    public function addMember($data)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO household_members
            (
                household_id,
                citizen_id,
                relationship
            )
            VALUES
            (
                :household_id,
                :citizen_id,
                :relationship
            )"
        );

        return $stmt->execute($data);
    }

    public function getMembers($householdId)
    {
        $stmt = $this->conn->prepare(
            "SELECT hm.*,
                    c.first_name,
                    c.last_name
             FROM household_members hm
             JOIN citizens c
               ON hm.citizen_id = c.id
             WHERE household_id = :id"
        );

        $stmt->execute([
            'id'=>$householdId
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countMembers($householdId){
        $stmt = $this->conn->query("SELECT COUNT(*) total FROM household_members WHERE household_id= :id");

        $stmt->execute(['id'=> $householdId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function memberExists($householdId, $citizenId){
        $stmt = $this->conn->prepare("SELECT id FROM household_members WHERE household_id = :household_id AND citizen_id= :citizen_id");

        $stmt->execute(['household_id'=> $householdId,
            'citizen_id'=> $citizenId]);

        return $stmt->fetch();

        
    }

    public function census()
    {
        $stmt = $this->conn->query(
            "SELECT
                zone,
                COUNT(*) total
            FROM households
            GROUP BY zone"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}