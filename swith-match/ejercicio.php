<?php 
/* Escribe un programa que tome un número entero como entrada y muestre un
mensaje diferente dependiendo de si el número es 1, 2, o 3 utilizando el ciclo
`match` */


$numero = intval(readline("ingrese un numero "));


$salida = match ($numero) {
     1=> "hola",
     2=> "buenos dias",
     3=>"adios",
     default => "numero no registrado",
};

echo $salida;


?>