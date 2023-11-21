<?php

function cargarCalificacion($id){
    $usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarCalificacion($id);

    if (!isset($result)) {
        echo '<h2>No calificaciones para este producto</h2>';
    } else {
        $comentariosMostrados = 0;

        echo '<div style="max-height: 500px; overflow-y: auto; position: relative; margin: 50px;">';

        foreach ($result as $f) {
            // Aplica estilos al div contenedor
            echo '<div style="text-align: left; padding: 20px; margin: 20px 20px 20px 180px; display: flex; align-items: center; position: relative;">';

            // Muestra la foto del usuario o administrador
            if (isset($f['Nombre'])) {
                echo '<img src="' . $f['foto_usuario'] . '" alt="Foto user" style="width: 75px; height: 75px; border-radius: 50%; margin-right: 20px;">';
            } elseif (isset($f['Nombres'])) {
                echo '<img src="' . $f['foto_administrador'] . '" alt="Foto admin" style="width: 75px; height: 75px; border-radius: 50%; margin-right: 20px;">';
            }

            // Muestra el nombre, la calificación y el comentario
            echo '<div>';
            if (isset($f['Nombre'])) {
                echo '<p style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">' . $f['Nombre'] . ' ';
            } elseif (isset($f['Nombres'])) {
                echo '<p style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">' . $f['Nombres'] . ' ';
            }

            // Muestra la calificación
            for ($i = 1; $i <= 5; $i++) {
                echo ($i <= $f['calificacion']) ? '&#9733;' : '&#9734;';
            }

            // Muestra el comentario
            echo '</p>';
            echo '<p style="font-size: 20px; margin-bottom: 20px;">' . $f['comentarios'] . '</p>';
            echo '</div>';

            // Agrega el botón de eliminar con estilos
            if($usuario){
                echo '<a href="../controller/eliminarCalificacion.php?id=' . $f['id'] . '&id_producto=' . $f['id_producto'] . '" style="position: absolute; top: 80px; left: 115px; margin: 10px 0; padding: 10px; font-weight: bold; background-color: #d9534f; color: white; border: none; cursor: pointer; transition: opacity 0.3s; text-decoration: none;" onmouseover="this.style.opacity=0.8" onmouseout="this.style.opacity=1">Eliminar</a>';

;

            }

            echo '</div>';

            $comentariosMostrados++;
        }

        echo '</div>';
    }
}



?>

