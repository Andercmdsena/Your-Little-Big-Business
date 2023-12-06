<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");


$id_servicio = $_GET['id'];


$objconexion = new consultas();
$conexion = $objconexion -> promedioCalificacionServicio($id_servicio)


?>