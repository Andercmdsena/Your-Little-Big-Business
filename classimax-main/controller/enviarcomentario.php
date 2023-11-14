<?php

    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    $conn = mysqli_connect('localhost', 'root', '', 'ylbb');
    
    $nombre = mysqli_real_escape_string($conn, $nombre);
    $comentario = mysqli_real_escape_string($conn, $comentario);

    $resultado = mysqli_query($conn,'INSERT INTO comentarios(nombre, comentario) VALUES("'.nombre.'", "'.comentario.'")');

    if ($resultado)
        echo('Comentario enviado con exito');
    else
        echo('Error, estamos intentando enviar tu comentario');

    mysqli_close($conn);

?>