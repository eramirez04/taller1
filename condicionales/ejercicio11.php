<?php 

/*  Desarrollar un programa que indique el rango de una calificación de acuerdo a la siguiente
tabla:
 - 90-100: Excelente
 - 80-89: Bueno
 - 70-79: Regular
 - 60-69: Aprobado
 - 0-59: Reprobado */


 $calificacion = intval(readline("ingrese su calificacion "));

 if($calificacion <= 100){
    if($calificacion >= 90){
        echo "excelente";
    }elseif($calificacion >= 80){
        echo "bueno";
    }elseif($calificacion >= 70){
        echo "regular";
    }elseif($calificacion >= 60){
        echo "aprobado";
    }elseif($calificacion <= 59){
        echo "reprobado";
    }
 }else{
    echo "error";
 }








?>


