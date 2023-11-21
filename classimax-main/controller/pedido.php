<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

// Establecer la zona horaria a Colombia
date_default_timezone_set('America/Bogota');

session_start();

$arg_id_usuario = $_SESSION['id'];

// Función para cargar los productos del carrito y devolver una cadena HTML
global $arg_id_usuario, $pdf;

$objConsulta = new Consultas();
$resultProductos = $objConsulta->obtenerId($arg_id_usuario);

$fecha_pedido = date("Y-m-d H:i:s"); // Inicializamos la variable $fecha_pedido

$usuario = null;
$producto = null;

if (!empty($resultProductos)) {
    foreach ($resultProductos as $f) {
        $usuario = $f['id_usuario'];
        $producto = $f['id_producto'];
    }
}

if ($producto !== null) {
    $objConsultaEmprendedor = new Consultas();
    $resultEmprendedor = $objConsultaEmprendedor->obtenerIdEmprendedor($producto);

    $emprendedor = null;

    if (!empty($resultEmprendedor)) {
        foreach ($resultEmprendedor as $f) {
            $emprendedor = $f['id_emprendedor'];
        }

        // Validar los datos
        if ($usuario !== null && $emprendedor !== null) {
            // Realizar la inserción del pedido en la base de datos
            $objConsultaPedido = new consultas();
            $resultPedido = $objConsultaPedido->pedido($usuario, $emprendedor, $fecha_pedido);

            // Verificar si el pedido se realizó correctamente
            
                // Continuar con la lógica de inserción de detalles de productos


                
                $objConsultaDetalles = new Consultas();
                $resultDetalles = $objConsultaDetalles->mostrarDetalles($arg_id_usuario);

                if (!empty($resultDetalles)) {
                    foreach ($resultDetalles as $detalle) {
                        $idPedido = $detalle['id'];
                        $objConsultaInsertar = new Consultas();
                        
                        $resultInsertar = $objConsultaInsertar->insertarDetallesProductos($idPedido, $producto );
                        
                        // Puedes agregar lógica adicional o manejo de errores aquí si es necesario
                    }
                }
             else {
                // Manejar error en la inserción del pedido
                echo '<script> alert("Ocurrió un error al realizar el pedido") </script>';
            }
        } else {
            // Manejar campos incompletos (esto podría cambiar según tus necesidades)
            echo '<script> alert("Ocurrió un error: datos incompletos") </script>';
            echo '<script>location.href="../views/emprendedor/registroProductos.php" </script>';
        }
    } else {
        // Manejar el caso cuando no hay emprendedor
        echo '<script> alert("No se encontró el emprendedor para los productos") </script>';
    }
} else {
    // Manejar el caso cuando no hay producto
    echo '<script> alert("No hay productos en el carrito") </script>';
    echo '<script>location.href="../views/emprendedor/registroProductos.php" </script>';
}
?>
