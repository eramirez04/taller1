<?php
/* Ejercicio de comparación numérica:
Escribe un programa que solicite al usuario que ingrese un
número. Luego, el programa debe imprimir si el número ingresado
es mayor, menor o igual a 10 utilizando la sentencia if. */

$numero =intval(readline("ingrese un numero \n"));

if($numero > 10){
    echo "el numero $numero es mayor que 10";
}elseif($numero <= 10){
    echo "el numero $numero es menor a 10";
}


?>