<?php 
/* Escribir un programa que calcule el descuento aplicable a una compra de acuerdo al
monto total:
 - Si el monto es mayor o igual a $1000, aplicar un descuento del 10%.
 - Si el monto es mayor o igual a $500, aplicar un descuento del 5%.
 - Si el monto es menor a $500, no aplicar descuento */


 $precio = intval(readline("ingrese el precio a pagar "));

if($precio >=1000){
    echo "el precio total a pagar con descuento del 10% es ". ($precio- (($precio*10)/100));
}elseif($precio >= 500){
    echo "el precio tota a pagar con descuento del 5% es ". ($precio-($precio * 0.05));
}else{
    echo "no se aplico el descuento";
}







?>