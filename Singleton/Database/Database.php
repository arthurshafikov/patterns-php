<?php

namespace Database;

class Database
{
    private static ?Database $instance = null;

    public static function getInstance(): Database
    {
        if (!self::$instance instanceof Database) {
            self::$instance =  new Database();
        }

        return self::$instance;
    }

    private function __construct()
    {
        echo "DATABASE CONSTRUCTOR\n";
    }
}
