<?php 


 function fierroAlv(){

    for($i = 1; $i <= 100; ++$i){
        if( $i % 3 == 0 AND $i % 5 == 0){
            echo " pesopluma  ";
        }elseif($i % 5 == 0){
            echo " plumaa ";
        }elseif($i % 3 == 0){
            echo " peso ";
        }
    echo $i. "<br>";
    }
} 

$a = fierroAlv()

?>