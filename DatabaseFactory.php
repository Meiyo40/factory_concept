<?php

require_once("./MySQLDatabase.php");
require_once("./PostgreSQL.php");

class DatabaseFactory
{
    public static function getDatabase($type)
    {
        switch ($type) {
            case "mysql":
                return new MySQLDatabase();
            case "postgresql":
                return new PostgreSQL();
            default:
                throw new Exception("Database not found");
        }
    }
}
