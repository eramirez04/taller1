<?php
/* Ejercicio de comparación múltiple:
Escribe un programa que solicite al usuario que ingrese un número del 1 al 7. Luego, el programa debe imprimir el
día de la semana correspondiente al número ingresado. Por ejemplo, si el usuario ingresa "1", el programa debe
imprimir "Lunes". Si el número ingresado no está en el rango válido, el programa debe imprimir "Número inválido". */



$numero =intval(readline("ingrese un numero del 1 al 7\n"));

if($numero <= 7){
    if ($numero == 1){
        echo "dia lunes";
    }
    elseif ($numero == 2){
        echo "dia martes";
    }
    elseif ($numero == 3){
        echo "dia miercoles";
    }
    elseif ($numero == 4){
        echo "dia jueves";
    }
    elseif ($numero == 5){
        echo "dia viernes";
    }
    elseif($numero == 6){
        echo "dia sabado";
    }
    elseif($numero == 7){
        echo "dia domingo";
    }
}else{
    echo "numero inválido";
}