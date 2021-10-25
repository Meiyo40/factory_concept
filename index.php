<?php

require_once("./Factory.php");

$product1 = Factory::getProduct("A");
$product2 = Factory::getProduct("B");


echo "Product1: " . $product1->getType();
echo "\n";
echo "Product2: " . $product2->getType();
