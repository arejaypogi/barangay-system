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
}