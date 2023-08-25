<?php 
/* Crea un programa que reciba el nombre de un color como entrada y muestre
un mensaje diferente según el color utilizando el ciclo `match`. Por ejemplo, si el
color es "rojo", mostrar "El color es cálido".
 */


$color = readline("ingrese el nombre de un color ");


$mensaje = match ($color){
    "verde" => "como el bosque",
    "rojo" => "igual que la sangre",
    "amarillo"=> "primer color de la bandera de Colombia",
    "azul"=> "como el cielo",
    "blanco"=>"representa la paz",

    default => "color no en la lista",
};

echo $mensaje;



?>