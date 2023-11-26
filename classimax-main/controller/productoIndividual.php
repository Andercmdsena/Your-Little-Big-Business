<?php
require_once("mostrarCalificacionProductos.php");
function cargarProductoIndividual(){
	$id = $_GET['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->productoIndividual($id);
	
	
    if (!isset($result)) {
		echo '<h2>No hay productos registrados</h2>';
    }   else{
		
		foreach($result as $f){
			$estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');
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
				<li class="list-inline-item"><i class="fa fa-user-o"></i> Vendido por '. $f['usuario_nombre'] .'<a href="user-profile.html"></a></li>
				<li class="list-inline-item"><i class="fa fa-folder-open-o"></i>'. $categoria .'</li>
				<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Localización<a href="#"></a></li>
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
				<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
				
				
				
				</ul>
				<div class="tab-content" style="margin-top: 50px; margin-bottom:140px" id="pills-tabContent">
				<div  class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<h3 class="tab-title">Descripción del producto</h3>
				<p>'. $f['descripcion'] .'</p>
				
				
				
				
				</div>
				<div class="widget rate">
				<!-- Heading -->
				<h5 class="widget-header text-center">Como calificarías 
				<br>
				este producto</h5>
				<!-- Rate -->
				
				<div id="producto">
				<style>
				/* Estilos generales para las estrellas y el formulario */
				#producto {
					text-align: center;
					margin-top: 20px;
				}
				
				input[type="checkbox"] {
					display: none; /* Ocultar los checkboxes originales */
				}
				
				label {
					font-size: 24px; /* Tamaño de la fuente de las estrellas */
					color: #ccc; /* Color de las estrellas inactivas */
					cursor: pointer;
					display: block; /* Hace que las estrellas aparezcan una debajo de la otra */
					margin-bottom: 5px; /* Espaciado entre las estrellas */
				}
				
				/* Estilos para las estrellas activas */
				input[type="checkbox"]:checked + label {
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
				
				<style>
				/* Estilos generales para las estrellas y el formulario */
				#producto {
					text-align: left; /* Alineado a la izquierda */
					margin-top: 20px;
				}
				
				input[type="checkbox"] {
					display: none; /* Ocultar los checkboxes originales */
				}
				
				label {
					font-size: 24px; /* Tamaño de la fuente de las estrellas */
					color: #ccc; /* Color de las estrellas inactivas */
					cursor: pointer;
					display: block; /* Hace que las estrellas aparezcan una debajo de la otra */
					margin-bottom: 5px; /* Espaciado entre las estrellas */
				}
				
				/* Estilos para las estrellas activas */
				input[type="checkbox"]:checked + label {
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
				
				<div id="producto">';
				
				require_once("promedioCalificacion.php");

				echo '
				<form id="formularioCalificacion" action="../controller/calificacionProductos.php?id='. $f['id'] .'" method="post">
				
				<input type="checkbox" name="calificacion" value="1" id="estrella1"><label for="estrella1">&#9733; </label> 	 |
				<input type="checkbox" name="calificacion" value="2" id="estrella2"><label for="estrella2">&#9733;&#9733; </label> 	 |
				<input type="checkbox" name="calificacion" value="3" id="estrella3"><label for="estrella3">&#9733;&#9733;&#9733; </label> 	 |
				<input type="checkbox" name="calificacion" value="4" id="estrella4"><label for="estrella4">&#9733;&#9733;&#9733;&#9733 </label> 	 |
				<input type="checkbox" name="calificacion" value="5" id="estrella5"><label for="estrella5">&#9733;&#9733;&#9733;&#9733;&#9733; </label>
				<textarea name="comentario" id="comentario" placeholder="Comentario..." maxlength="100"></textarea>
				<button id="botoncalificacion" style="margin-top:15px;" type="submit">Enviar Calificación</button>
				</form>
				</div>
				
				
				
				</div>
				<div id="producto">
				<!-- Contenido del producto -->
				
				
				</div>
						</div>
								
								
								
								<div>
								</div>
			
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Product Specifications</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>Precio del vendedor</td>
											<td>'. $f['precio'] .'</td>
										</tr>
										<tr>
											<td>Agregado</td>
											<td>26 Diciembre</td>
										</tr>
										<tr>
											<td>Localidad</td>
											<td>......</td>
										</tr>
										<tr>
											<td>Marca</td>
											<td>MSI</td>
										</tr>
										<tr>
											<td>Condición</td>
											<td>Nuevo</td>
										</tr>
										<tr>
											<td>Modelo</td>
											<td>2017</td>
										</tr>
										<tr>
											<td>State</td>
											<td>Dhaka</td>
										</tr>
										<tr>
											<td>Battery Life</td>
											<td>23</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Reseñas del producto</h3>
								<div class="product-review">
									<div class="media">
										<!-- Avater -->
										<img src="images/user/user-thumb.jpg" alt="avater">
										<div class="media-body">
											<!-- Ratings -->
											<div class="ratings">
												<ul class="list-inline">
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
												</ul>
											</div>
											<div class="name">
												<h5>JAlguien</h5>
											</div>
											<div class="date">
												<p>Marzo 20, 2018</p>
											</div>


											<div class="review-comment">
												
												<?php
												include("../../controller/recibircomentario.php")
												?>
												
											</div>

											
										</div>
									</div>
									<div class="review-submission">
										<h3 class="tab-title">Envia tu comentario</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr"></div>
										</div>
										<div class="review-submit">


											<form id="formulario" action="enviarcomentario.php" method="POST">
												<div class="col-lg-6 mb-3">
													<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required/>
												</div>
												<div class="col-12 mb-3">
													<textarea name="comentario" id="comentario" rows="6" class="form-control" placeholder="Mensaje" required></textarea>
												</div>
												<div class="col-12">
													<input  id="enviar" type="submit" value="Comentar..."/>
												</div>
											</form>





											<script>
    
											$("#enviar").click(function(){
												var nombre = $("#nombre").val();
												var comentario = $("#comentario").val();

												if (nombre=="")
												{
													alert("debe escribir un nombre");
													return;
												}

												if (comentario=="")
												{
													alert("debe escribir un comentario");
													return;
												}
											
												$("#formulario").submit();

												})
											</script>





										</div>
									</div>
								</div>
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
						<img class="rounded-circle img-fluid mb-5 px-5" src="'. $f['usuario_foto'] .'" alt="">
						<h4><a href="user-profile.html">'. $f['usuario_nombre'] .'</a></h4>
						<p class="member-time">Miembro desde Junio 27, 2017</p>
						
		
					</div>
					<div class="widget boton text-center">
						<ul class="list-inline">
							<li class="list-inline-item botones_productos"><a href="contact-us.html" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contacto</a></li>
							';
                if (isset($_SESSION['id'])) {
                    echo '<li class="list-inline-item"><a class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3" href="../controller/agregarCarrito.php?id_producto=' . $f['id'] . '">Agregar al carrito</a></li>';
                } else {
                    echo '<li class="list-inline-item"><a class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3" href="../theme/login.php?id_producto=' . $f['id'] . '">Agregar al carrito</a></li>';
                }
                echo '
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
  

    ';
	echo '
	<div class="bg-gray">
	<div style="width: 80%; margin: auto; text-align: center; padding: 10px; margin-top: -80px;">';
echo cargarCalificacion($id);
echo '</div> </div>';

            }

        
        };
        
    };

}


?>

