<?php

include_once "Rectangulo.php";
include_once "Triangulo.php";

$color='Red';

$rectangulo = new Rectangulo(20,5);
$triangulo = new Triangulo(5,5);
$rectangulo ->SetColor($color);
$triangulo  ->SetColor($color);

echo $rectangulo -> ToString() . '<br>';
echo $triangulo -> ToString();