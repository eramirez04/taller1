<?php 

require_once ("classMueble.php");

class Mesa extends Mueble{
    
     public $strForma;
    public $strTamano;
    static $estado = "agotado"; 

     function __construct(string $descripcion,float $precio,string $color, string $material, string $tamano){
        parent:: __construct($descripcion, $precio, $color, $material);
        $this -> strTamano = $tamano;
    } 

     public function setForma($forma){
        $this -> strForma = $forma;

    }
     
   public function getformA(){
       return $this ->strForma;
   }

    public function getProducto(){
        $arrProducto = array(
            'producto' => $this -> strDescripcion,
            'precio' => $this -> floatprecio,
            'stock_minimo' => $this -> intstockMinimo,
            'estado'=> $this -> status,
            'color' => $this -> srtcolor,
            'material' => $this -> strMaterial,
            'tamaño' => $this -> strTamano,
            'forma' => $this -> strForma,
        );
        return $arrProducto;
    }
   }  
?>