<?php 
    //IF NO CONFIG CONSTANT THEN DO NOT LOAD FILE
    if(!defined('__CONFIG__')){
        exit("You do not have a config file! :(");
    }

    //Include DB.php file
    include_once "classes/DB.php";

    $con = DB::getConnection();

?> 