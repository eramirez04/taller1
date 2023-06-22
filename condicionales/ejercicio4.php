<?php 
/* 4- Ejercicio de anidación de sentencias if:
Escribe un programa que solicite al usuario que ingrese su edad. Si la edad es mayor o igual a 18 años, el programa
debe preguntar si tiene licencia de conducir. Si la respuesta es "sí", el programa debe imprimir "Puedes conducir".
Si la respuesta es "no", el programa debe imprimir "Debes obtener una licencia de conducir primero". Si la edad es
menor de 18 años, el programa debe imprimir "No puedes conducir" */


$edad =readline("ingrese su edad \n");

if ($edad >= 18){
    $licencia = readline("tienes licencia de conducir \n");
    if ($licencia == "si"){
        echo "pudes conducir";
    }
    elseif ($licencia == "no"){
        echo "debes obtener una licencia de conducir primero";
    }
}if($edad < 18){
    echo "no pudes conducir no tienes la edad sufuciente";
}


?>