<?php

$conn = mysqli_connect('localhost', 'root', '', 'ylbb');

$resultado = mysqli_query($conn, 'SELECT * FROM comentarios');

while ($comentario = mysqli_fetch_object($resultado))

{
    ?>
    <b><?php echo($comentario->nombre); ?></b> (<?php echo($comentario->fecha); ?>) comento:
    <br/>
    <?php echo($comentario->$comentario); ?>
    <br/>
    <hr/>
    <?php
}

?>