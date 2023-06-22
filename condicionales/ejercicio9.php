<?php 


$nota = intval(readline("ingrese su nota "));


if($nota <= 100){
    if($nota >= 60){
        echo "aprobado";
    }elseif($nota >= 90 ){
        echo "sobresaliente";
    }
    else{
        echo "reprobado";
    }
}else{
    "nota no valida";
}



?>