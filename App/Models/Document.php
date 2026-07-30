<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Document extends Database{

    public function total(){
        return $this->conn->query("SELECT COUNT(*) total FROM documents")->fetch(PDO::FETCH_ASSOC);    
        }

    public function recent(){
    $stmt = $this->conn->query( "SELECT * FROM documents ORDER BY id DESC LIMIT 10");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}