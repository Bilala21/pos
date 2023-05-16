<?php
namespace App\dbConfig;

use mysqli;

class DbConfigration extends mysqli
{
    public static function initDb()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pos";
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
