<?php
require_once("./iDatabaseImpl.php");

class PostgreSql implements iDatabaseImpl
{
    public function insert($entity)
    {
        return "insert MyEntity in a PostgreSQL Database";
    }

    public function getById($id)
    {
        return "Get MyEntity from PostgreSQL from id " . $id;
    }

    public function update($entity)
    {
        return "update MyEntity from a PostgreSQL Database";
    }
}
