<?php

require_once ("../model/conexion.php");
require_once ("../model/consultas.php");

function consulta(){
    
    $id_usuario = $_SESSION['id'];
    $objConsutal = new consultas();
    
    $result = $objConsutal->consultaCarrito($id_usuario) ;
}
