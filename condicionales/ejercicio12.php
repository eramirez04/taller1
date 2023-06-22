<?php 

/* escribir un programa que muestre el día de la semana correspondiente a un número del 1 al
7. Considera que 1 es Lunes y 7 es Domingo. */

$dia = intval(readline("ingrese un numero del 1 al 7 "));

if($dia <=7){
    if($dia == 1){
        echo "lunes";
    }
    elseif($dia == 2){
        echo "martes";
    }
    elseif($dia == 3){
        echo "miercoles";
    }
    elseif($dia == 4){
        echo "jueves";
    }
    elseif($dia == 5){
        echo "viernes";
    }
    elseif($dia == 6){
        echo "sabado";
    }
    elseif($dia == 7){
        echo "domingo";
    }
}else{
    echo "no existe";   
}





?>