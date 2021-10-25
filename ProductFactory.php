<?php

require_once("./ProductA.php");
require_once("./ProductB.php");

class ProductFactory
{
    public static function getProduct($type)
    {
        switch ($type) {
            case "A":
                return new ProductA();
            case "B":
                return new ProductB();
            default:
                throw new Exception("Invalide product type");
        }
    }
}
