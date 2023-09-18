<?php 

function repartirCartas(){
    global $cartas;
    $cartas = ["As de treboles", "2 de treboles", "3 de treboles","4 de treboles", "5 de treboles","6 de treboles", "7 de treboles", "8 de treboles", "9 de treboles", "10 de treboles", "As de diamantes","2 de diamantes","3 de diamantes", "4 de diamantes", "5 de diamantes","6 de diamantes","7 de diamantes","8 de diamantes","9 de diamantes", "10 de diamantes", "As de corazones","2 de corazones","3 de corazones", "4 de corazones","5 de corazones","6 de corazones","7 de corazones", "8 de corazones", "9 de corazones", "10 de corazones" ,"As de picas","2 de picas", "3 de picas", "4 de picas", "5 de picas", "6 de picas", "7 de picas", "8 de picas", "9 de picas", "10 de picas", "jota de treboles","jota de diamantes","jota de corazones", "jota de picas", "reina de treboles","reina de diamantes","reina de corazones", "reina de picas", "rey de treboles","rey de diamantes", "rey de corazones", "rey de picas"];
    $mano = array();

     for($i = 1; $i  <=5 ; $i++){
         $cartaAleatoria = $cartas[array_rand($cartas)];
         $mano[]= $cartaAleatoria;
    }
 return $mano;
}

function evaluaMano($cartas){

     if(escaleraReal($cartas)){
        $a= "mano escalera real";
        return $a;
     }elseif(escaleraColor($cartas)){
        $escaleraColor = "mano de escalera de color";
        return $escaleraColor;
     }
     else{
        $c= "no cadsfafao";
        return $c;
     }
}

function escaleraReal($cartas){
    $escaleraReal = ["As de Corazones", "Rey de Corazones", "Reina de Corazones", "Jota de Corazones", "10 de Corazones"];
    sort($cartas);
    return ($cartas === $escaleraReal);    
}

function escaleraColor($cartas){

}

function obtenerPalos($cartas){
    $palos = [];
    foreach ($cartas as $carta) {
        $palos[] = explode(" ", $carta)[2];
    }
    return $palos;
}

function mostrarCartas($cartas){
    $b = implode(" , ", $cartas);
    return $b;
}

// imprimir en pantalla las cartas
$maon = repartirCartas();
 $mostrarCartas= mostrarCartas($maon);
 echo "<h2>las cartas asignadas son: </h2>"."<br>";
 echo "<strong>$mostrarCartas </strong>" ."<br>";


// mostrar que mano tiene
$evaluaMano = evaluaMano($maon);
echo "<h2>tiene una mano: </h2>"."<br>";
echo "<h1>$evaluaMano</h1>"."<br>";
