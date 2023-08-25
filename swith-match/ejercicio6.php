<?php 
/* Crea un programa que reciba un número del 1 al 12 como entrada y muestre el
nombre del mes correspondiente utilizando el ciclo `match`. */

$mes = intval(readline("ingrese un numero del 1 al 12 "));

$mensaje = match($mes){
    1 => "enero",
    2 => "febrero",
    3 => "marzo",
    4 => "abril",
    5 => "mayo",
    6 => "junio",
    7 => "julio",
    8 => "agosto",
    9 => "septiembre",
    10 => "octubre",
    11 => "noviembre",
    12 => "diciembre",

    default => "numero ingresado invalido",
};

echo $mensaje;

?>