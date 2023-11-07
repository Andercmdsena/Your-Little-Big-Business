<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

$consultas = new consultas();
$msj = null;
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$cantidad= $_POST['cantidad'];
$categoria= $_POST['categoria'];
$estado= $_POST['estado'];
$descripcion= $_POST['descripcion'];
$id_producto= $_POST['id_producto'];

if (strlen($estado) > 0 || strlen($nombre) || strlen($precio) || strlen($cantidad) || strlen($categoria)) {
    $msj = $consultas ->modificarProducto("Disponibilidad", $estado, $id_producto);
    $msj = $consultas ->modificarProducto("descripcion", $descripcion, $id_producto);
    $msj = $consultas ->modificarProducto("nombre", $nombre, $id_producto);
    $msj = $consultas ->modificarProducto("precio", $precio, $id_producto);
    $msj = $consultas ->modificarProducto("cantidad", $cantidad, $id_producto);
    $msj = $consultas ->modificarProducto("categoria", $categoria, $id_producto);
    echo $msj;
}else{
    echo'<script> alert("Error al modificar, los campos deben estar completo") </script>';
    echo "<script> location.href='../views/emprendedor/verProductos.php' </script>";
}
?>