<?php

include_once "Rectangulo.php";
include_once "Triangulo.php";
$altura = 10;
$rectangulo = new Rectangulo($altura,5);
$triangulo = new Triangulo(5,5);

$dibujar = $rectangulo ->Dibujar();

for ($i=0; $i < $altura; $i++) { 
   echo $dibujar;
}

echo $rectangulo -> ToString();