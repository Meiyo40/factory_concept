<?php

interface iDatabaseImpl
{
    public function insert($entity);
    public function getById($id);
    public function update($entity);
}
