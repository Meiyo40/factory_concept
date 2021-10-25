<?php

require_once("./iDatabaseImpl.php");

class MySQLDatabase implements iDatabaseImpl
{
    public function insert($entity)
    {
        return "insert MyEntity in a MySQL Database";
    }

    public function getById($id)
    {
        return "Get MyEntity from MySQL from id " . $id;
    }

    public function update($entity)
    {
        return "update MyEntity from a MySQL Database";
    }
}
