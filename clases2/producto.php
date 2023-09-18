<?php 

class Producto{

    public $strDescripcion;
    public $floatprecio;
    public $intstockMinimo = 10;
    protected $status = "agotado";
    
    function __construct(string $descripcion, float $precio){
        $this -> strDescripcion =  $descripcion;
        $this -> floatprecio = $precio;
    }

    public function getProducto(){
        $arrProducto = array(
            'producto' => $this -> strDescripcion,
            'precio' => $this -> floatprecio,
            'stock_minimo' => $this -> intstockMinimo,
            'estado'=> $this -> status,

        );
        return $arrProducto;
}


}