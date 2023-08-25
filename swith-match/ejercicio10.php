<?php 
/*  Crea un programa que reciba una opción del 1 al 5 como entrada y realice una
acción diferente según la opción utilizando el ciclo `match`. */

$numero = intval(readline("ingrese un numero del 1 - 5: "));

$mensaje = match ($numero){
    1 => "hola",
    2 => "un saludo",
    3 => "es hora de la programacion",
    4 => "buen dia",
    5 => "JAJAJA",

    default => "no esta dentro de los parametros",
};

echo $mensaje;


?>