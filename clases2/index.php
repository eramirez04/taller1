<?php

    require_once("classMesa.php");

    function data($data){
        $formato = print_r('<br>');
        $formato .= print_r($data);
        $formato .= print_r('<br>');
        return $formato;
    }

    $objProdunto = new producto("cama",3000);
    $arrinfo = $objProdunto -> getProducto();

    data($arrinfo);

    echo "<br>";

    $objsilla = new Mueble("silla", 32.32, "negro", "madera");
    $arrinfoObj2 = $objsilla ->getProducto();

    data($arrinfoObj2);

    echo "<br>";

    $objMesa = new Mesa("Mesa", 39999, "cafecito", "metal", "grande");
    $arrObjMesa = $objMesa -> getProducto();

    data($arrObjMesa);
