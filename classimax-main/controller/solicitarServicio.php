<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();

$servicio = $_GET['id_servicio'];
$usuario = $_SESSION['id'];


$objconexion = new consultas();
$conexion = $objconexion -> solicitarServicio($servicio, $usuario)


?>