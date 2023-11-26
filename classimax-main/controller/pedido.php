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
$emprendedores = array(); // Guardar emprendedores para los que ya se ha creado un pedido

if (!empty($resultProductos)) {
    // Realizar la inserción del pedido en la base de datos
    $objConsultaPedido = new Consultas();

    foreach ($resultProductos as $f) {
        $usuario = $f['id_usuario'];
        $producto = $f['id_producto'];

        if ($producto !== null) {
            $objConsultaEmprendedor = new Consultas();
            $resultEmprendedor = $objConsultaEmprendedor->obtenerIdEmprendedor($producto);

            if (!empty($resultEmprendedor)) {
                foreach ($resultEmprendedor as $emprendedor) {
                    $emprendedorActual = $emprendedor['id_emprendedor'];

                    // Validar los datos
                    if ($usuario !== null && !in_array($emprendedorActual, $emprendedores)) {
                        // Realizar la inserción del pedido solo si no se ha creado antes
                        $resultPedido = $objConsultaPedido->pedido($usuario, $emprendedorActual, $fecha_pedido);

                        // Verificar si el pedido se realizó correctamente
                        if ($resultPedido) {
                            // Agregar emprendedor a la lista de emprendedores procesados
                            $emprendedores[] = $emprendedorActual;

                            // Continuar con la lógica de inserción de detalles de productos
                            $objConsultaDetalles = new Consultas();
                            $detallesPorEmprendedor = $objConsultaDetalles->mostrarPedido3($arg_id_usuario);

                            // Asegurarte de que $detallesPorEmprendedor sea un array antes de usar foreach
                            if (is_array($detallesPorEmprendedor) || is_object($detallesPorEmprendedor)) {
                                foreach ($detallesPorEmprendedor as $detalle) {
                                    $idPedido = $detalle['id_pedido'];
                                    $idProducto = $detalle['id_producto_carrito'];

                                    // Verificar si ya existe una entrada con el mismo id_pedido e id_producto
                                    $objConsultaVerificar = new Consultas();
                                    $existeEntrada = $objConsultaVerificar->verificarEntradaExistente($idPedido, $idProducto);

                                    if (!$existeEntrada) {
                                        // La entrada no existe, realiza la inserción
                                        $objConsultaInsertar = new Consultas();
                                        $resultInsertar = $objConsultaInsertar->insertarDetallesProductos($idPedido, $idProducto);

                                        // Puedes agregar lógica adicional o manejo de errores aquí si es necesario
                                    }
                                }
                            } else {
                                // Manejar el caso cuando $detallesPorEmprendedor no es un array u objeto
                                echo '<script> alert("Error en los detalles del pedido") </script>';
                            }
                        } else {
                            // Manejar error en la inserción del pedido
                            echo '<script> alert("Ocurrió un error al realizar el pedido") </script>';
                        }
                    }
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
    }
} else {
    // Manejar el caso cuando no hay productos en el carrito
    echo '<script> alert("No hay productos en el carrito") </script>';
    echo '<script>location.href="../views/emprendedor/registroProductos.php" </script>';
}

// ... tu código posterior
?>
