<?php 
/*  Escribe un programa que tome un número del 1 al 7 como entrada y muestre
el nombre del día de la semana correspondiente utilizando el ciclo `match`. */

$dia = intval(readline("ingrese un dia de la semana del 1 al 7: "));

$mensaje = match ($dia){
    1 => "lunes",
    2 => "martes",
    3 => "miercoles",
    4 => "jueves",
    5 => "viernes",
    6 => "sabado",
    7 => "domingo",

    default => "dia no valido",
};
echo $mensaje;

?>