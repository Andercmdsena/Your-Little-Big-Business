<?php
function cargarPublicacion() {
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPublicacion();

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            
            $estado = ($f['Disponibilidad'] == 1) ? 'Disponible' : (($f['Disponibilidad'] == 0) ? 'Agotado' : 'Pendiente');
            // Limitar la descripción a un cierto número de caracteres
            $descripcion = (strlen($f['descripcion']) > 100) ? substr($f['descripcion'], 0, 100) . "..." : $f['descripcion'];

            $categoria = ($f['categoria'] == 1) ? 'Tecnologia' :    
(($f['categoria'] == 2) ? 'Moda' :
(($f['categoria'] == 3) ? 'Salud y belleza' :
(($f['categoria'] == 4) ? 'Deportes' :
(($f['categoria'] == 5) ? 'Bebes y juegos' :
(($f['categoria'] == 6) ? 'Alimentos y bebidas' :
(($f['categoria'] == 7) ? 'Oficina' :
(($f['categoria'] == 8) ? 'Hogar' :
(($f['categoria'] == 9) ? 'Mascotas' :
(($f['categoria'] == 10) ? 'Libros y medios' : 'Otro')))))))));

            if ($f['Estado'] == 1 && $f['Disponibilidad'] == 1) {
                echo  '
        <div style="padding: 0 18px;" class="card col-md-4 producto">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <img src="' . $f['foto'] . '" alt="Foto user" style="width:250px; height:120px; ">
            </div>
            <div class="card-body producto_catalogo">
                <h4 class="card-title"><a id="tit" href="../theme/single2.php?id=' . $f['id'] . '">' . $f['nombre'] . '</a></h4>
                <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                        <a id="cat" href="single.html"><i class="fa fa-folder-open-o"></i>' . $categoria. '</a>
                    </li>
                    <li class="list-inline-item">
                        <a id="calen" href="category.html"><i class="fa fa-calendar"></i>11 de enero</a>
                    </li>
                </ul>
                <p class="card-text">' . $descripcion . '</p>
                <div class="product-ratings">
                <p class="card-text">Precio:' . $f['precio'] . '</p>
                <p class="card-text">Estado:' . $estado. '</p>
                
                <div class="product-ratings">
                    <ul class="list-inline">';
                            
                    echo'    
                    </ul>
                </div>
                <div class="botonesCarrito">';
                if (isset($_SESSION['id'])) {
                    echo '<button class="btn btn-light"><a id="agre" href="../controller/agregarCarrito.php?id_producto=' . $f['id'] . '"> Agregar al carrito</a></button>
                    <button class="btn btn-light"><a id="comp" href="pasarelapagos.php">Comprar ahora</a></button>';
                } else {
                    echo '<button class="btn btn-light"><a id="agre" href="../theme/login.php">Agregar al carrito</a></button>
                    <button class="btn btn-light"><a id="comp" href="../theme/login.php">Comprar ahora</a></button>';
                }
                echo '
                </div>
            </div>
        </div>
    </div>
    ';
            }
        }
    }
}




function cargarPublicacionCarrusel() {
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPublicacionCarrusel();

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            $estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');

            if ($f['Estado'] == 1) {
                // Limitar la descripción a un cierto número de caracteres
                $descripcion = (strlen($f['descripcion']) > 50) ? substr($f['descripcion'], 0, 50) . "..." : $f['descripcion'];

                echo  '
                <div class="product-item bg-light producto_catalogo">
                    <div class="cardCarrusel">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div>
                            -->
                            <img src="' . $f['foto'] . '" alt="Foto usuario" style="width:340px; height:150px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a id="tit" href="../theme/single2.php?id=' . $f['id'] . '">' . $f['nombre'] . '</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a id="cat" href="single.html"><i class="fa fa-folder-open-o"></i>' . $f['categoria'] . '</a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="calen" href="category.html"><i class="fa fa-calendar"></i>26 de Julio</a>
                                </li>
                            </ul>
                            <p class="card-text">'. $descripcion .'</p>
                        <div class="product-ratings">
                            <ul class="list-inline">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
                                </div>
                                <div class="col-sm-12 col-lg-4">
        
        
        
                            
        
            
            
            
            ';
                };
            }
       
        
    };

}
           

?>