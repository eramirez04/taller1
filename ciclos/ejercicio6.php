<?php 

echo "<table>";

for($i =1 ; $i <=10 ; $i++){
    echo "<tr>";

    for($a = 1; $a <= 10; $a++){

        $x = $i * $a;

        echo  "<td>". $x ."</td>";

    }
}
echo "</tables>";


//  echo "¡¡intructor es el mejor!!, no se le olvide";

?>