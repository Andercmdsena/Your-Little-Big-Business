<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

function cargarCalificacion($id){
  $objConsulta = new Consultas();
  $result = $objConsulta->mostrarCalificacion($id);

  if (!isset($result)) {
      echo '<h2>No calificaciones para este producto</h2>';
  } else {
      foreach($result as $f){
          // Aplica estilos al div contenedor
          echo '<div style="text-align: left; padding: 10px; margin: 10px;">';
          echo '<tr>';
          
          // Verifica si la información proviene de la tabla de usuarios
          if(isset($f['Nombre'])) {
              echo '<img src="'.$f['foto_usuario'].'" alt="Foto user" style="width: 70px; height: 70px; border-radius: 50%;">';
              echo '<td style="font-size: 16px;">'.$f['Nombre'].'</td>';
          }
          
          // Verifica si la información proviene de la tabla de administradores
          if(isset($f['Nombres'])) {
              echo '<img src="'.$f['foto_administrador'].'" alt="Foto admin" style="width: 70px; height: 70px; border-radius: 50%;">';
              echo '<td style="font-size: 16px;">'.$f['Nombres'].'</td>';
          }
          
          // Muestra las estrellas según el valor de la calificación
          echo '<td style="font-size: 20px;">';
          for ($i = 1; $i <= 5; $i++) {
              echo ($i <= $f['calificacion']) ? '&#9733;' : '&#9734;';
          }
          echo '</td>';
          
          echo '</tr>';
          echo '</div>';
      }
  }
}







?>