<?php 


class Persona{
    // propiedades

    private $intDpi;
    private $strNombre;
    private $edad;


    // metodos

    public function __construct(int $cedula, string $nombres, int $edad){
        $this -> intDpi = $cedula;
        $this -> strNombre = $nombres;
        $this -> edad = $edad;
    }
    public function getDatosPersonales(){

        $datos = "
        <h1> DATOS PERSONALES </H1>
        dpi : {$this->intDpi}<br>
        Nombre :{$this ->strNombre}<br>
        Edad : {$this ->edad}<br>
        ";
        return $datos;
    }
}






?>