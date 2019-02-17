<?php
 
//IF NO CONFIG CONSTANT THEN DO NOT LOAD FILE
if(!defined('__CONFIG__')){
    exit("You do not have a config file! :(");
}


class DB{
    protected static $con;

    private function __construct(){

        try{
            //(host problem? Update: NO PASSWORD)
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_system', 'root', '' );
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);

        } catch(PDOException $e){
            echo "Could not connect to database.";
            exit;
        }

    }

    public static function getConnection(){
        //start instance if not started
        if(!self::$con){
            new DB();
        }

        //Return db connection
        return self::$con;
    }
}

?>