<?php 
/* . Diseña un programa que tome una letra como entrada y muestre un mensaje
según la categoría a la que pertenezca la letra utilizando el ciclo `match`. Por
ejemplo, si la letra es una vocal, mostrar "Es una vocal". */


$letra = readline("ingrese una letra ");

// ejercicio realizado con la sentencia switch.
switch ($letra){
    case "a":
        echo "es una vocal";
        break;
    case "e":
        echo "es una vocal";
        break;
    case "i":
        echo "es una vocal";
        break;
    case "o":
        echo "es una vocal";
        break;
    case "a":
        echo "es una vocal";
        break;
    default:
        echo "es una consonante";
        break;
};


// ejercicio realizado con la sentencia match.

/*   $mensaje = match ($letra){
    'a'=> "es una vocal",
    'e'=> "es una vocal",
    'i'=> "es una vocal",
    'o'=> "es una vocal",
    'u'=> "es una vocal",

    default => "es una consonante",
};
 
echo $mensaje; */

  
?>