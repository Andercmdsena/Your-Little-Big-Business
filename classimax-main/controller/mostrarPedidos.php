<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

function mostrarPedido($usuario){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPedido($usuario);

    if (!isset($result)) {
        echo '<h2>No ahí pedidos</h2>';
    } else {
        foreach($result as $f) {
            echo  '
                <tr>
                    <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:120px; height:120px; border-radius:20px"></td>
                    <td>'.$f['id_pedido'].'</td>
                    <td>'.$f['nombre'].'</td>
                    <td>'.$f['precio'].'</td>
                    <td>'.$f['cantidad_en_carrito'].'</td>
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