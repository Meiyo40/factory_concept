<?php

require_once("./iFactoryImpl.php");


class ProductB implements iFactoryImpl
{
    private $type = "B";

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
