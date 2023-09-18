<?php 

require_once("classPersona.php");

class Empleado extends Persona{


    private $strpuesto;


    function __construct(int $cedula, string $nombres, int $edad){
        parent:: __construct($cedula, $nombres, $edad);
    }

   function setPuesto($puesto){
       $this -> strpuesto = $puesto;
   }

   function getPuesto(){
       return $this -> strpuesto;
   }
}


?>