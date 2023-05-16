<?php
spl_autoload_register("autoloader");

function autoloader($class_name){
    $extension=".php";
    $full_path = $class_name . $extension;
    if(! file_exists($full_path)){
        return false;
    }

    include_once $full_path;
}
