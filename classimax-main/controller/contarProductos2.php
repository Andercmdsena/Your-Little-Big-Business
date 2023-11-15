<?php
// Incluye los archivos necesarios
require_once("../../model/conexion.php");
require_once("../../model/consultas.php");

// Crea una instancia del modelo
$modelo = new Consultas(); // Reemplaza "TuModelo" con el nombre de tu clase de modelo

// Llama a la función para contar los usuarios
$totalUsuarios = $modelo->contarProductos();

// Ahora puedes mostrar el número total de usuarios en tu vista o realizar otras acciones según sea necesario
echo $totalUsuarios;
?>
