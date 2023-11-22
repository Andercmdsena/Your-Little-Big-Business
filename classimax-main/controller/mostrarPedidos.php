<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php

function mostrarPedido(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPedido();


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                
                <td>'.$f['id'].'</td>
            <tr>';
        }
        
    }
}



?>