<?php


require_once("../model/conexion.php");
require_once("../model/consultas.php");
//aterrizamos la variable que enviamos desde el metodo get
$id= $_GET['id'];
$id_servicio = $_GET['id_servicio'];
$objConsultas = new Consultas();
$result = $objConsultas->eliminarCalificacionServicio($id, $id_servicio);

?>