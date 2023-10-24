<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");


$id = $_GET['id'];


$objconexion = new consultas();
$conexion = $objconexion -> productoIndividual($id)


?>