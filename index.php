<?php

require_once("./ProductFactory.php");
require_once("./DatabaseFactory.php");

$product1 = ProductFactory::getProduct("A");
$product2 = ProductFactory::getProduct("B");


echo "Product1: " . $product1->getType();
echo "\n";
echo "Product2: " . $product2->getType();


$MySQLDatabase = DatabaseFactory::getDatabase("mysql");
$Postgresql = DatabaseFactory::getDatabase("postgresql");

echo "\n";
echo $MySQLDatabase->getById(10);
echo "\n";
echo $Postgresql->getById(55);
