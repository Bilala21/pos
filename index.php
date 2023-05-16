<?php
use App\Http\Controllers\UserController;
require_once './includes/autoloader.inc.php';
$userController = new UserController();
$userController->create();
$userController->index();





