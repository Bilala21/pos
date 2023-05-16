<?php
namespace App\migrations;

use App\dbConfig\DbConfigration;

class User extends DbConfigration
{
    public function createUserTable()
    {
       $conn= User::initDb();
        $tableName = 'users';
        $query = "CREATE TABLE IF NOT EXISTS $tableName (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL
        )";
        if ($conn->query($query) === true) {
            
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }
}
