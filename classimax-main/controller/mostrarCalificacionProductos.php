<?php

function cargarCalificacion($id){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarCalificacion($id);

    if (!isset($result)) {
        echo '<h2>No calificaciones para este producto</h2>';
    } else {
        $comentariosMostrados = 0;

        echo '<div style="max-height: 500px; overflow-y: auto;">';

        foreach ($result as $f) {
            // Aplica estilos al div contenedor
            echo '<div style="text-align: left; padding: 10px; margin: 20px 20px 20px 180px; display: flex; align-items: center;">';

            // Muestra la foto del usuario o administrador
            if (isset($f['Nombre'])) {
                echo '<img src="' . $f['foto_usuario'] . '" alt="Foto user" style="width: 75px; height: 75px; border-radius: 50%; margin-right: 10px;">';
            } elseif (isset($f['Nombres'])) {
                echo '<img src="' . $f['foto_administrador'] . '" alt="Foto admin" style="width: 75px; height: 75px; border-radius: 50%; margin-right: 10px;">';
            }

            // Muestra el nombre, la calificación y el comentario
            echo '<div>';
            if (isset($f['Nombre'])) {
                echo '<p style="font-size: 16px; font-weight: bold;">' . $f['Nombre'] . ' ';
            } elseif (isset($f['Nombres'])) {
                echo '<p style="font-size: 16px; font-weight: bold;">' . $f['Nombres'] . ' ';
            }

            // Muestra la calificación
            for ($i = 1; $i <= 5; $i++) {
                echo ($i <= $f['calificacion']) ? '&#9733;' : '&#9734;';
            }

            // Muestra el comentario
            echo '</p>';
            echo '<p style="font-size: 20px;">' . $f['comentarios'] . '</p>';
            echo '</div>';

            echo '</div>';

            $comentariosMostrados++;
        }

        echo '</div>';
    }
}
?>

