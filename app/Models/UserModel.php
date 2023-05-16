<?php
namespace App\Models;
use Exception;

class UserModel 
{

    public static function findById($id)
    {
        try {

        
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage();
        }

    }
}
