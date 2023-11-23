<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();

$arg_id_usuario = $_SESSION['id'];

function cargarProductoCarrito() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProductoCarrito($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>Tu carrito está vacío</h2>';
    } else {
        foreach ($result as $f) {
            $estado = ($f['Disponibilidad'] == 1) ? 'Disponible' : (($f['Disponibilidad'] == 0) ? 'Agotado' : 'Pendiente');
            echo  '
            <br>
            <div class="row justify-content-center align-items-center productosxd">
                <div class="col-md-3">
                    <img src="' . $f['foto'] . '" alt="Foto producto" style="width:260px; height:200; margin-right: 20px;
                    object-fit: cover; border-radius: 20px;">
                </div>
                <div style="padding-left: 20px;" class="col-md-9 detallesproducto">
                    <p class="nombreproducto">' . $f['nombre'] . '</p>
                    <p class="Descripcion">' . $f['descripcion'] . '</p>
                    <p class="disponible">' . $estado . '</p>
                    <div class="dropdown-center">
                        <p class="precioproducto" style="margin-right: 10px; margin-bottom: 10px;">' . $f['precio'] . '</p> <br>
                        <label for="cantidad">Cantidad</label>
                        <select name="cantidad" id="cantidad" class="form-select btn compar" style="margin-right: 10px; margin-bottom: 10px; width: 100px;">
                            <option value="1">' . $f['cantidad_carrito'] . '</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>

                        <a id="guardarLink" class="btn compar" style="margin-right: 10px; margin-bottom: 9px; color: #000000 !important;">Guardar</a>

                        <script>
                            // Script para construir la URL con el valor seleccionado del elemento select
                            document.getElementById("guardarLink").addEventListener("click", function() {
                                var cantidadSeleccionada = document.getElementById("cantidad").value;
                                var url = "../controller/guardarProductoCarrito.php?id=' . $f['id_carrito'] . '&cantidad=" + cantidadSeleccionada;
                                window.location.href = url;
                            });
                        </script>
                    </div>
                </div>
            </div>
            <hr>
            
            <div class="preciototal">
                <a  style="margin:20px" class="botonpagar1" href="../controller/eliminarProductoCarrito.php?id=' . $f['id_carrito'] . '">Eliminar del carrito</a>
            
                Total: ' . $f['precio'] . '
            </div>
            <hr>
            ';
        }
    }
}

?>
