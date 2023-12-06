<?php
require_once("mostrarCalificacionServicios.php");
function cargarServicioIndividual(){
	$id = $_GET['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->servicioIndividual($id);

    if (!isset($result)) {
        echo '<h2>No hay servicios registrados</h2>';
    }   else{

        foreach($result as $f){
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
            $estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');
            if ($f['Estado'] == 1) {
                echo  '
                <section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-lg-8">
				<div class="product-details">
					<h1 class="product-title">'. $f['nombre'] .'</h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> Vendido por <strong>'. $f['usuario_nombre'] .'</strong></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i><a style="margin-left: 10px; color: #000000; cursor: default; text-decoration: none;" href="#">'. $categoria .'</a>
							</li>
							<hr>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
						<div class="product-slider-item my-4" data-image="'.$f['foto'].'">
                        <img src="'.$f['foto'].'" alt="Foto user" style="width:340px; height:150px; ">
						</div>
						<div class="product-slider-item my-4" data-image="'.$f['foto2'].'">
                            <img src="'.$f['foto2'].'" alt="Foto user" style="width:340px; height:150px; ">
						</div>
						<div class="product-slider-item my-4" data-image="'.$f['foto3'].'">
                            <img src="'.$f['foto3'].'" alt="Foto user" style="width:340px; height:150px; ">
						</div>
					</div>
					<!-- product slider -->

					<div class="content mt-5 pt-5">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Descripción del producto</h3>
								<p>'. $f['descripcion'] .'</p>
							</div>
							<div>
							<style>
				/* Estilos generales para las estrellas y el formulario */
#producto {
    text-align: left; /* Alineado a la izquierda */
    margin-top: 20px;
}

input[type="radio"] {
    display: none; /* Ocultar los radios originales */
}

label {
    font-size: 24px; /* Tamaño de la fuente de las estrellas */
    color: #ccc; /* Color de las estrellas inactivas */
    cursor: pointer;
    display: inline-block; /* Alinea las estrellas en línea */
    margin-right: 5px; /* Espaciado entre las estrellas */
}

/* Estilos para las estrellas activas */
input[type="radio"]:checked + label {
    color: #ffd700; /* Color de las estrellas activas */
}

/* Estilos adicionales para resaltar las estrellas */
label:hover {
    transform: scale(1.2); /* Aumentar el tamaño al pasar el ratón por encima */
    transition: transform 0.2s ease-in-out;
}

/* Estilos para el área de comentario y el botón */
#comentario {
    resize: none;
    width: 100%;
    box-sizing: border-box;
    margin-top: 10px;
    padding: 10px;
}

button {
    margin-top: 10px;
    background-color: #555; /* Cambiado el color del botón */
    color: #fff; /* Texto del botón en blanco */
    padding: 10px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
}

button:hover {
    background-color: #333; /* Cambiado el color del botón al pasar el ratón por encima */
}

				</style>
							';
				
							require_once("promedioCalificacionServicios.php");
			
							echo '
							
							<form id="formularioCalificacion" action="../controller/calificacionServicios.php?id='. $f['id'] .'" method="post">
							
							<input type="radio"  required name="calificacion" value="1" id="estrella1" required><label for="estrella1">&#9733; </label> |
				<input type="radio"  required name="calificacion" value="2" id="estrella2" required><label for="estrella2">&#9733;&#9733; </label> |
				<input type="radio" required  name="calificacion" value="3" id="estrella3" required><label for="estrella3">&#9733;&#9733;&#9733; </label> |
				<input type="radio"  required name="calificacion" value="4" id="estrella4" required><label for="estrella4">&#9733;&#9733;&#9733;&#9733; </label> |
				<input type="radio"  required name="calificacion" value="5" id="estrella5" required><label for="estrella5">&#9733;&#9733;&#9733;&#9733;&#9733; </label>
				<textarea style="font-weight: bold; color: black;" name="comentario" required id="comentario" placeholder="Comentario..." maxlength="100"></textarea>
				<button id="botoncalificacion" style="margin-top:15px;" type="submit">Enviar Calificación</button>
							</form>
							</div>
							
							
							
						
							
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Precio</h4>
						<p>$'. $f['precio'] .'</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
					<img style="border-radius: 20px !important;" class="img-fluid mb-5 px-12" src="'. $f['usuario_foto'] .'" alt="">

						<h4>'. $f['usuario_nombre'] .'</h4>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="../controller/solicitarServicio.php?id_servicio='. $f['id'] .'" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contacto</a></li>
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					
					

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
  

    ';
	echo '
	<div class="bg-gray">
	<div style="width: 80%; margin: auto; text-align: center; padding: 4px; margin-top: -110px;">';
echo cargarCalificacion($id);
echo '</div> </div>';
	
            }

        
        };
        
    };

}


?>