<?php
function cargarServicio() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarServicio($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            echo  '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['precio'] . '</td>
                    <td>' . $f['duracion'] . '</td>
                    <td>' . $f['Estado'] . '</td>
                    <td>' . $f['categoria'] . '</td>
                    <td>
                        <a href="../../views/emprendedor/modificarServicio.php?id=' . $f['id'] . '" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="../../controller/eliminarProducto.php?id=' . $f['id'] . '"><i class="ti-trash"></i>Eliminar</a>
                    </td>
                <tr>';
        }
    }
}


?>