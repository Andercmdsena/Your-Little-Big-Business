<?php


require_once("../model/conexion.php");
require_once("../model/consultas.php");
//aterrizamos la variable que enviamos desde el metodo get
$id= $_GET['id'];
$id_producto = $_GET['id_producto'];
$objConsultas = new Consultas();
$result = $objConsultas->eliminarCalificacion($id, $id_producto);

?>