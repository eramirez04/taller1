<?php 
/*  Escribe un programa que tome una hora en formato "HH:MM" como entrada y
muestre un mensaje diferente según la franja horaria utilizando el ciclo `match`. */

$horario = intval(readline("ingrese un horario en formato HH " ."mm "));


if ($horario <= 23 ){
    $mensaje = match (true){
        $horario >= 18 => "buenas noches",
        $horario >= 12 => "buenas tardes",
        $horario >= 1  => "buenos días",
    };
    echo $mensaje;
    
}else{
    echo "no esta dentro de los formatos HH:MM";
}

?>