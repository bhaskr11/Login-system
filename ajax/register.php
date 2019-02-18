<?php 
    //Allowing the config 
    define('__CONFIG__', true);
    //Require the config file
    require_once "../inc/config.php"; 

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //return json format
        header('Content-Type: application/json');
        
        $array = ['test', 'test2', 'test3'];
        
        echo json_encode($array, JSON_PRETTY_PRINT);

    } else {
        //end the script
        exit('test');
    }


?>