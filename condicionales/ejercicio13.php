<?php 

/* 8. Crear un programa que determine si una letra ingresada es una vocal o una consonante */

$vocal = strval(readline("ingrese una letra "));

$letra = (($vocal == "a")  || ($vocal == "e") || ($vocal == "i") || ($vocal == "o") || ($vocal == "u"))? "es vocal" : " es una consonante";
var_dump($vocal);
echo var_dump($letra);

?>