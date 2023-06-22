<?php 
/* Crear un programa que determine si un año es bisiesto o no. Un año
es bisiesto si es divisible por 4 y no divisible por 100, o si es divisible
por 400 */



$ano = intval(readline("ingrese año "));

if(($ano % 4) == 0 ){
    echo "El año es bisiesto";

}elseif(($ano % 100) != 0 ){
    echo "no es año bisiesto";
}









?>