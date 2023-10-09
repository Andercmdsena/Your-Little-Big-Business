<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

$objConsultas = new Consultas();;
$msj = null;
$estado= $_POST['estado'];
$id_producto= $_POST['id_producto'];

if (strlen($estado) > 0) {
    $result = $objConsultas->modificarProductoAdmin($estado, $id_producto);
    echo $msj;
}else{
    echo "Error al modificar";
}
?>