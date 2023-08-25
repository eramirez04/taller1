<?php 
/* Diseña un programa que tome una nota numérica del 0 al 100 como entrada y
muestre un mensaje diferente según el rango de la nota utilizando el ciclo
`match`. Por ejemplo, si la nota está entre 90 y 100, mostrar "Excelente" */

$nota = intval(readline("ingrese nota numerica del 1 al 100 "));

if($nota <= 100){
$mensaje = match (true){
    $nota >= 90 => "excelente",
    $nota >= 80 => "buen estudiante",
    $nota >= 70 => "sobresaliente",
    $nota >= 60 => "regular",
    $nota <=59 => "nota perdida",

    default => "numero de nota invalido",

};

echo $mensaje;

}else{
    echo "nota no esta dentro de los limites de 100";
}



?>