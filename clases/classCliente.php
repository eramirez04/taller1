<?php 

require_once("classPersona.php");

class Cliente extends Persona{
  
    private $strCreditos;


      // metodos
    
      public function __construct(int $cedula, string $nombres, int $edad){
          parent:: __construct($cedula, $nombres, $edad);
      }

      public function setCreditos(string $creditos){
          $this -> srtCreditos = $creditos;
      }
      public function getCreditos(){
          return $this -> strCreditos;
      }
}

?>