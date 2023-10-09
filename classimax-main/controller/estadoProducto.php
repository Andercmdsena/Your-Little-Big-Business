<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

$id= $_GET['id'];

$objConsultas = new Consultas();