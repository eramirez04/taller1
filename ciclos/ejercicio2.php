<?php 

$num =9;
$lim = 1;

if($num <=12){
    while($lim <=10){
        $res = $lim * $num;
        echo $res ."</br>";
        $lim++;
    }
}else{
    echo "no esta dentro de los parametros";
;}
    

?>