<?php 

/* Desarrollar un programa que determine si un número es primo o no. Un número es primo si
solo es divisible por 1 y por sí mismo. */

$numero = intval(readline("ingrese un numero "));

$primo = (($numero  % 2) == 0 ) ? "no es primo"  : "el numero es primo";

echo $primo;




?>