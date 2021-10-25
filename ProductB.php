<?php

require_once("./iProductImpl.php");


class ProductB implements iProductImpl
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
