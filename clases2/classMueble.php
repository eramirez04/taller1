<?php 

require_once("producto.php");

class Mueble extends Producto{
    // 
    public $srtcolor;
    public $strMaterial;
    static $strStatus = "activar";

    function __construct(string $descripcion, float $precio, string $color, string $material){
        parent:: __construct($descripcion, $precio);
        $this -> srtcolor = $color;
        $this -> strMaterial = $material;
    }

    public function getProducto(){
        $arrProducto = array(
            'producto' => $this -> strDescripcion,
            'precio' => $this -> floatprecio,
            'stock_minimo' => $this -> intstockMinimo,
            'estado'=> $this -> status,
            'color' => $this -> srtcolor,
            'material' => $this -> strMaterial,
        );
        return $arrProducto;
    }
   
}

?>