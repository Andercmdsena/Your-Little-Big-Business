<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

$consultas = new consultas();
$msj = null;
$nombre= $_POST['nombre'];
$apellido= $_POST['apellidos'];
$email= $_POST['email'];
$telefono= $_POST['telefono'];
$id_producto= $_POST['id_producto'];

if (strlen($nombre) > 0) {
    $msj = $consultas ->modificarEmprendedor("Nombre", $nombre, $id_producto);
    $msj = $consultas ->modificarEmprendedor("Apellido", $apellido, $id_producto);
    $msj = $consultas ->modificarEmprendedor("Email", $email, $id_producto);
    $msj = $consultas ->modificarEmprendedor("Telefono", $telefono, $id_producto);
    echo $msj;
}else{
    echo "Error al modificar";
}
?>