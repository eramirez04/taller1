<?php 
/* Una empresa está realizando un aumento del 15% al sueldo base de sus 
trabajadores, escriba un algoritmo que solicite el nombre de un trabajador y su sueldo 
base, a continuación, el algoritmo debe calcular el aumento y el valor final a pagar al 
trabajado */

$nombre = readline("ingrese su nombre \n");  // toma los datos de consola xampp
$sueldo = readline("ingrese su sueldo base \n");// toma los datos de consola xampp

$porcentaje = $sueldo * 15 / 100;

$valortotal = $sueldo + $porcentaje;

 
// imprime el valor total de la valariable "$valortotal" en consola.
echo ($nombre." " . "su valor final a pagar es $".$valortotal);

?>
