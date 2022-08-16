<?php
require('Product.php');

$prod = new Product(null, null, null, null);
$prod2 = new Product(null, null, null, null);

$prod->setPrice(10);
$prod2->setPrice(20);

$prod->name = "TV 40 Polegadas";


$prod->setName("Sansung_S");
$prod2->setName("SHARP_E");

echo "Valor = ";
$prod->getPrice();

echo "<br>nome = ";
$prod->getPrice();

echo "<br>------------------<br>";


echo "Valor = ";
$prod2->getPrice();

echo "<br>nome = ";
$prod2->getPrice();



?>