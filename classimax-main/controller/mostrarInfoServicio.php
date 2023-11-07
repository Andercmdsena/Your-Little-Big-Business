<?php
function cargarServicio() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarServicio($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            $categoria = ($f['categoria'] == 11) ? 'Carpintería' :
            (($f['categoria'] == 12) ? 'Fontanería' :
            (($f['categoria'] == 13) ? 'Electricidad' :
            (($f['categoria'] == 14) ? 'Pintura' :
            (($f['categoria'] == 15) ? 'Jardinería' :
            (($f['categoria'] == 16) ? 'Limpieza' :
            (($f['categoria'] == 17) ? 'Reparación de electrodomésticos' :
            (($f['categoria'] == 18) ? 'Cerrajería' :
            (($f['categoria'] == 19) ? 'Construcción' :
            (($f['categoria'] == 20) ? 'Mantenimiento general' : 'Otro')))))))));


            $estado = ($f['Disponibilidad'] == 1) ? 'Disponible' : (($f['Disponibilidad'] == 0) ? 'Agotado' : 'Pendiente');
            echo  '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['precio'] . '</td>
                    <td>' . $f['duracion'] . '</td>
                    <td>'. $estado.'</td>
                    <td>' . $categoria. '</td>
                    <td>
                        <a href="../../views/emprendedor/modificarServicio.php?id=' . $f['id'] . '" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="../../controller/eliminarServicio.php?id=' . $f['id'] . '"><i class="ti-trash"></i>Eliminar</a>
                    </td>
                <tr>';
        }
    }
}


?>