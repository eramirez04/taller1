<?php 

    require_once ("classPersona.php");
    require_once ("classEmpleado.php");
    require_once ("classCliente.php");

    $objEmpleado = new Empleado(23,"emersson",19);
    $objEmpleado->setPuesto("aprendiz");
    echo $objEmpleado->getDatosPersonales();
    echo "<br>";
    echo "Puesto: ".$objEmpleado->getPuesto();

?>