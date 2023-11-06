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
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            echo  '
            <br>
            <div class="productosxd">
            <img src="' . $f['foto'] . '" alt="Foto producto" style="width:120px; height:120px; border-radius:20px">
              <div class="detallesproducto">
                  <p class="nombreproducto">' . $f['nombre'] . '</p>
                  <p class="Descripcion">' . $f['descripcion'] . '</p>
                  <p class="disponible">' . $f['Estado_producto'] . '</p>
                  <div class="dropdown-center">
                  <p class="precioproducto">' . $f['precio'] . '</p>
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cantidad
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">1</a></li>
                      <li><a class="dropdown-item" href="#">2</a></li>
                      <li><a class="dropdown-item" href="#">3</a></li>
                    </ul>
                    <a class="btn compar" href="#" role="button">Compartir</a>
                  </div>
              </div>
            </div>
            <hr>
            
            <div class="preciototal">
            <a class="botonpagar1" href="../controller/eliminarProductoCarrito.php?id=' . $f['id_carrito'] . '">Elminar del carrito</a>
            <a class="botonpagar" href="../TCPDF-main/prueba.php">Pagar</a>
                Total: ' . $f['precio'] . '<hr>
            </div>
            ';
        }
    }
}




?>