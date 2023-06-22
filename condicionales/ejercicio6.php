<?php 

$numero = intval(readline("ingrese un numero "));

$signo = ($numero >= 1) ? true : false;

var_dump($signo) ;

if($signo === true){
    echo "el numero es positivo";
}else{
    echo "el numero es negativo";
}


/*  
if($numero >= 1) {
    echo "numero positivo";
}elseif($numero === 0){
    echo "es cero";
}else{
    echo "numero negativo";
}
 */




?>