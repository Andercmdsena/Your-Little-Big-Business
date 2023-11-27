<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

function mostrarPedido($usuario) {
    $objConsulta = new Consultas();
    $resultPedido = $objConsulta->mostrarPedidoCliente($usuario);

    if (!isset($resultPedido)) {
        echo '<h2>No hay pedidos pendientes</h2>';
    } else {
        // Array para realizar un seguimiento de las combinaciones únicas
        $combinacionesUnicas = [];

        foreach ($resultPedido as $f) {
            // Verificar si la combinación (id_pedido, id_producto) ya ha sido mostrada
            $combinacion = $f['id_producto'] . '_' . $f['nombre'] . '_' . $f['precio'] . '_' . $f['id_usuario'];
            if (in_array($combinacion, $combinacionesUnicas)) {
                continue; // Saltar la iteración si ya se ha mostrado esta combinación
            }

            // Agregar la combinación al array de combinaciones únicas
            $combinacionesUnicas[] = $combinacion;

            // Resto del código para mostrar la información...
            $objConsultaCantidad = new Consultas();
            $cantidad = $objConsultaCantidad->verCantidad($f['id_producto'], $f['id_usuario']);

            echo  '
                <tr>
                    <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:120px; height:120px; border-radius:20px"></td>
                    <td>'.$f['id_pedido'].'</td>
                    <td>'.$f['nombre'].'</td>
                    <td>'.$f['precio'].'</td>
                    <td style="text-align:center;">'.$cantidad.'</td> <!-- Utilizar la cantidad obtenida -->
                    <td>
                    <a href="../../controller/cancelarPedido.php?id_pedido='.$f['id'].'&id_producto='.$f['id_producto'].'&id='.$f['ID'].'" class="boton-enviar" style="background-color: red; text-align:center; font-weight: bold; color: #000; margin-right:20px; padding: 5px 10px; border: none; border-radius: 5px; text-decoration: none;">Cancelar pedido</a>
                </tr>';
        }
    }
}




?>