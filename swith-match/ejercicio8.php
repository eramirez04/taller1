<?php 
/* Desarrolla un programa que tome una cadena de texto como entrada y
muestre un mensaje según la longitud de la cadena utilizando el ciclo `match`.
Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "La cadena es
larga".
*/

$cadena = strlen(strval(readline("ingrese una cadena de texto (string) ")));

$mensaje  = match(true){
   
    $cadena >= 20 => "la cadena supera los 20 caracteres",
    $cadena >= 10 => "la cadena es muy larga",
    $cadena >= 6 => "cadena con 6 o mas caracteres de longitud",
    $cadena <= 5 => "es muy corta la cadena ",
    
    default => "datos ingresados invalidos",
};

echo $mensaje;

?>