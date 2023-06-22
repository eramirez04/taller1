<?php 

$numero = intval(readline("ingrese un numero "));


if(($numero % 3 && $numero % 5) == 0 ){
    echo "el numero es divisible";
}
else{
    echo "el numero no es divisible";
}


?>