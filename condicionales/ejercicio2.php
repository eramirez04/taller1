<?php 
/* Ejercicio de comparación de cadenas:
Escribe un programa que solicite al usuario que ingrese su
nombre. Si el nombre ingresado es "Juan", el programa debe
imprimir "¡Hola Juan!" en la pantalla. Si el nombre es diferente, el
programa debe imprimir "Lo siento, no te conozco" */

$nombre = readline("ingrese su nombre \n");
$juan = "juan";
if($nombre === $juan){
    echo "Hola juan";
}else{
    echo "lo siento, no eres juan";
}






?>