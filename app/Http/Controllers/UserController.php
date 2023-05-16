<?php
namespace App\Http\Controllers;

use App\migrations\User;

class UserController extends User
{
    protected $conn = null;
    protected $connection = null;
    public function __construct()
    {
        $this->conn = User::initDb();
        User::createUserTable();
    }
    public function create()
    {
        // $sql = "INSERT INTO users (name, email, password) VALUES ('John', 'john@example.com', '12345678')";

        // if ($this->conn->query($sql) === true) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $this->conn->error;
        // }

    }
    public function index()
    {
        $sql = "SELECT * FROM users where id=1";
        $result = $this->conn->query($sql);
        $users = $result->fetch_assoc();
        if ($result->num_rows) {
            foreach ($users as $key => $user) {
                echo $user;
            }
        }
        else{
            echo "Users not found";
        }
    }
}
