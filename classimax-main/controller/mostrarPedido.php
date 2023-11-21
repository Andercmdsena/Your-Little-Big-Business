<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();

$arg_id_usuario = $_SESSION['id'];




function cargarPedidos() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPedido($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>Tu carrito esta vacio</h2>';
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
                  <p class="disponible">' . $estado. '</p>
                  <div class="dropdown-center">
                  <p class="precioproducto" style="margin-right: 10px;
                  margin-bottom: 10px;">' . $f['precio'] . '</p>
                    <button style="margin-right: 10px;
                    margin-bottom: 10px;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cantidad
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">1</a></li>
                      <li><a class="dropdown-item" href="#">2</a></li>
                      <li><a class="dropdown-item" href="#">3</a></li>
                    </ul>
                    <a style="margin-right: 10px; margin-bottom: 9px; color: #000000 !important;" class="btn compar" href="#" role="button">Compartir</a>
                  </div>
              </div>
            </div>
            <hr>
            
            <div class="preciototal">
            <a   class="botonpagar1" href="../controller/eliminarProductoCarrito.php?id=' . $f['id_carrito'] . '">Elminar del carrito</a>
            
            
                Total: ' . $f['precio'] . '
            </div>
            <hr>
            ';
        }
    }
}




?>