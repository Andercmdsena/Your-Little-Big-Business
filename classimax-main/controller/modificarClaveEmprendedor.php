<?php


require_once("../model/conexion.php");
require_once("../model/consultas.php");



$identificacion = $_POST['identificacion'];
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];

if($clave == $clave2){


    $claveMd = md5($clave);

    $objConsultas = new Consultas();
    $result = $objConsultas->actualizarClaveEmprendedor($identificacion, $claveMd);
}else{
    echo "<script>alert('Las claves no coinciden')</script>";
    echo "<script>location.href='../views/administrador/emprendedor2.php?id=$identificacion'</script>";
};

?>