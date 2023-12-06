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
$estado= $_POST['estado'];
$id_producto= $_POST['id_producto'];

if (strlen($nombre) > 0) {
    $msj = $consultas ->modificarUsuarioAdminRegistrados("Nombres", $nombre, $id_producto);
    $msj = $consultas ->modificarUsuarioAdminRegistrados("Apellidos", $apellido, $id_producto);
    $msj = $consultas ->modificarUsuarioAdminRegistrados("Email", $email, $id_producto);
    $msj = $consultas ->modificarUsuarioAdminRegistrados("telefono", $telefono, $id_producto);
    $msj = $consultas ->modificarUsuarioAdminRegistrados("estado",$estado, $id_producto);
    echo $msj;
}else{
    echo "Error al modificar";
}
?>