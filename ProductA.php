<?php

require_once("./iFactoryImpl.php");

class ProductA implements iFactoryImpl
{
    private $type = "A";

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
