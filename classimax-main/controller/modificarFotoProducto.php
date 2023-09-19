<?php

    require_once("../model/conexion.php");
    require_once("../model/consultas.php");


    $id = $_POST['identificacion'];

    $foto = "../Uploads/usuarios/".$_FILES['foto']['name'];

    $resultado = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

    $objConsultas = new Consultas();
    $result = $objConsultas->actualizarFotoProducto($id, $foto);
?>