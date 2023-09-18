<?php 


class usuario{
     // propiedades
     private $strNombre;
     private $strEmail;
     private $tipo;
     private $clave;
 
     //metodos
 
     public function __construct(string $nombre,string $correos, string $tipo){
         $this -> strNombre = $nombre;
         $this -> email = $correos;
         $this -> tipo = $tipo;
         $this -> clave =rand(1,100);
     }

}
?>