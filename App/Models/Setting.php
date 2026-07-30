<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Setting extends Database
{
    public function get()
    {
        $stmt = $this->conn->query(
            "SELECT * FROM barangay_settings LIMIT 1"
        );

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}