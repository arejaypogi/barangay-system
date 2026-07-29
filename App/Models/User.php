<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class User extends Database {
    public function findByUsername($Username){
        $sql = "SELECT * FROM users WHERE username = :username";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute(['username' => $Username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}