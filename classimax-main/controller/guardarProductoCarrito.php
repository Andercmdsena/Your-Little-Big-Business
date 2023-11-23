<?php


require_once("../model/conexion.php");
require_once("../model/consultas.php");
//aterrizamos la variable que enviamos desde el metodo get
$id= $_GET['id'];
$cantidad= $_GET['cantidad'];


$objConsultas = new Consultas();
$result = $objConsultas->cantidadCarrito($id, $cantidad);

?>