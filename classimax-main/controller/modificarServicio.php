<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

$consultas = new consultas();
$msj = null;
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$duracion= $_POST['duracion'];
$categoria= $_POST['categoria'];
$descripcion= $_POST['descripcion'];
$estado= $_POST['estado'];
$id_servicio= $_POST['id_servicio'];

if (strlen($estado) > 0 || strlen($nombre) || strlen($precio) || strlen($cantidad) || strlen($categoria)) {
    $msj = $consultas ->modificarServicio("nombre", $nombre, $id_servicio);
    $msj = $consultas ->modificarServicio("precio", $precio, $id_servicio);
    $msj = $consultas ->modificarServicio("duracion", $duracion, $id_servicio);
    $msj = $consultas ->modificarServicio("categoria", $categoria, $id_servicio);
    $msj = $consultas ->modificarServicio("descripcion", $descripcion, $id_servicio);
    $msj = $consultas ->modificarServicio("Estado", $estado, $id_servicio);
    echo $msj;
}else{
    echo'<script> alert("Error al modificar, los campos deben estar completo") </script>';
    echo "<script> location.href='../views/emprendedor/verServicio.php' </script>";
}
?>