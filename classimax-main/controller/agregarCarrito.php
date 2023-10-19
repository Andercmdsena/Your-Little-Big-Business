<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();

$producto = $_GET['id_producto'];
$usuario = $_SESSION['id'];


$objconexion = new consultas();
$conexion = $objconexion -> agregarCarrito($producto, $usuario)


?>