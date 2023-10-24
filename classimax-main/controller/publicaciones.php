<?php
function cargarPublicacion(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPublicacion();

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    }   else{

        foreach($result as $f){
            $estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');
            if ($f['Estado'] == 1) {
                echo  '
        
        
        <div class="card col-md-4 producto">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <img src="'.$f['foto'].'" alt="Foto user" style="width:250px; height:150px; ">
            </div>
            <div class="card-body producto_catalogo">
                <h4 class="card-title"><a href="../theme/single2.php?id=' . $f['id'] . '">'. $f['nombre'] .'</a></h4>
                <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                        <a href="single.html"><i class="fa fa-folder-open-o"></i>'. $f['categoria'] .'</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="category.html"><i class="fa fa-calendar"></i>11 de enero</a>
                    </li>
                </ul>
                <p class="card-text">'. $f['descripcion'] .'</p>
                <div class="product-ratings">
                <p class="card-text">Precio:'. $f['precio'] .'</p>
                <p class="card-text">Estado:'. $f['Estado_producto'] .'</p>
                
                
                <div class="product-ratings">
                
                    <ul class="list-inline">
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                </div>
                <div class="botonesCarrito">
                ';
                if (isset($_SESSION['id'])) {
                    echo '<button class="btn btn-light"><a href="../controller/agregarCarrito.php?id_producto='. $f['id'] .'"> Agregar al carrito</a></button>
                    <button class="btn btn-light"><a href="pasarelapagos.php">Comprar ahora</a></button>';
                } else {
                    echo '<button class="btn btn-light"><a href="../theme/login.php">Agregar al carrito</a></button>
                    <button class="btn btn-light"><a href="../theme/login.php">Comprar ahora</a></button>';
                }
                echo '
                </div>
            </div>
        </div>
    </div>

    
    
    
    ';
            }

        
        };
        
    };

}
function cargarPublicacionCarrusel(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarPublicacion();

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    }   else{

        foreach($result as $f){
            $estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');
        
            if ($f['Estado'] == 1){
                echo  '
        
        
        
                <div class="product-item bg-light producto_catalogo">
                <div class="cardCarrusel">
                    <div class="thumb-content">
                        <!-- <div class="price">$200</div> -->
                        
                        <img src="'.$f['foto'].'" alt="Foto user" style="width:340px; height:150px; ">
                        
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="single.php">'. $f['nombre'] .'</a></h4>
                        <ul class="list-inline product-meta">
                            <li class="list-inline-item">
                                <a href="single.html"><i class="fa fa-folder-open-o"></i>'. $f['categoria'] .'</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="category.html"><i class="fa fa-calendar"></i>26 de Julion</a>
                            </li>
                        </ul>
                        <p class="card-text">'. $f['descripcion'] .'</p>
                        <div class="product-ratings">
                            <ul class="list-inline">
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
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