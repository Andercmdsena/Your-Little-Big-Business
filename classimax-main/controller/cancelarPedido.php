<?php
require_once("../model/conexion.php");
require_once("../model/consultas.php");

// Asegúrate de que los parámetros id_pedido, id_producto e id estén definidos
if (isset($_GET['id_pedido']) && isset($_GET['id_producto']) && isset($_GET['id'])) {
    // Obtén los valores de los parámetros
    $id_pedido = $_GET['id_pedido'];
    $id_producto = $_GET['id_producto'];
    $id = $_GET['id'];

    // Instancia la clase Consultas
    $objConsultas = new Consultas();

    // Llama al método cancelarPedido con los valores obtenidos
    $result = $objConsultas->cancelarPedido($id_pedido, $id_producto, $id);
    
    // Puedes realizar alguna lógica adicional aquí después de cancelar el pedido si es necesario
} else {
    // Manejo de error si los parámetros no están definidos
    echo "Error: Los parámetros id_pedido, id_producto e id no están definidos.";
}
?>
