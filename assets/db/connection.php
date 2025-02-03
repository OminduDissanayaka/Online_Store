<?php

class Database
{

    public static $connection;

    public static function setupConnection()
    {

        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "Your Password", "online_store", "3306");
            // Check for connection errors
            if (self::$connection->connect_error) {
                die("Database connection failed: ".self::$connection->connect_error);
            }
        }
    }

    public static function iud($q){

        Database::setupConnection();
        Database::$connection->query($q);
    }

    public static function search($q){
        Database::setupConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}
