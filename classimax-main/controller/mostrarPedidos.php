<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

function mostrarPedido($usuario) {
    $objConsulta = new Consultas();
    $resultPedido = $objConsulta->mostrarPedido($usuario);

    if (!isset($resultPedido)) {
        echo '<h2>No hay usuarios registrados</h2>';
    } else {
        foreach($resultPedido as $f) {
            $objConsultaCantidad = new Consultas();
            $cantidad = $objConsultaCantidad->verCantidad($f['id_producto'], $f['id_usuario']);

            echo  '
                <tr>
                    <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:120px; height:120px; border-radius:20px"></td>
                    <td>'.$f['id_pedido'].'</td>
                    <td>'.$f['nombre'].'</td>
                    <td>'.$f['precio'].'</td>
                    <td>'.$cantidad.'</td> <!-- Utilizar la cantidad obtenida -->
                    <td style="text-align: center;">
                        <!-- Botón Cancelar Pedido -->
                        <button class="boton-cancelar" style="background-color: #ff3333; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; margin-bottom: 5px;">Cancelar Pedido</button>
                        <button class="boton-enviar" style="background-color: #4caf50; color: #fff; padding: 5px 10px; border: none; border-radius: 5px;">Enviar Pedido</button>
                    </td>
                </tr>';
        }        
    }
}




?>