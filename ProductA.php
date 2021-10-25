<?php

require_once("./iProductImpl.php");

class ProductA implements iProductImpl
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
