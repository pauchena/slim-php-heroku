<?php

include_once "Rectangulo.php";
include_once "Triangulo.php";

$rectangulo = new Rectangulo(20,5);
$triangulo = new Triangulo(5,5);
$rectangulo ->SetColor("Red");
$triangulo  ->SetColor("Violet");

echo $rectangulo -> ToString() . "<br>";
echo $triangulo -> ToString();