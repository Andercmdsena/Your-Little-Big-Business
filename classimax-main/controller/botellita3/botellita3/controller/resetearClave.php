<?php
    require_once("../model/conexion.php");
    require_once("../model/resetPassword.php");

    $identificacion = $_POST['identificacion'];
    $email = $_POST['email'];

    $objClave = new RecuperarClave();
    $result = $objClave->resetearClave($identificacion, $email);
?>