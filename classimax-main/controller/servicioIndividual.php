<?php

function cargarServicioIndividual(){
	$id = $_GET['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->servicioIndividual($id);

    if (!isset($result)) {
        echo '<h2>No hay servicios registrados</h2>';
    }   else{

        foreach($result as $f){
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
							<li class="list-inline-item"><i class="fa fa-user-o"></i> Vendido por <a href="user-profile.html"></a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i><a href="#">'. $f['categoria'] .'</a></li>
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
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">	<datagrid>Detalle del producto</datagrid></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">Especificaciones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">Reseñas</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Descripción del producto</h3>
								<p>'. $f['descripcion'] .'</p>

								

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
												<p>
												Mi experiencia con este portátil ha sido impresionante. Su rendimiento es excepcional gracias a su potente CPU y una generosa cantidad de RAM, lo que facilita la multitarea sin problemas. La pantalla Full HD ofrece colores vibrantes y detalles nítidos, perfecta para ver películas o trabajar en proyectos creativos
												</p>
											</div>
										</div>
									</div>
									<div class="review-submission">
										<h3 class="tab-title">Enviar tu reseña</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr"></div>
										</div>
										<div class="review-submit">
											<form action="#" method="POST" class="row">
												<div class="col-lg-6 mb-3">
													<input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
												</div>
												<div class="col-lg-6 mb-3">
													<input type="email" name="email" id="email" class="form-control" placeholder="Correo" required>
												</div>
												<div class="col-12 mb-3">
													<textarea name="review" id="review" rows="6" class="form-control" placeholder="Mensaje" required></textarea>
												</div>
												<div class="col-12">
													<button type="submit" class="btn btn-main">Enviar</button>
												</div>
											</form>
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
						<a href="single.html">Ver todas publicaciones</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="contact-us.html" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contacto</a></li>
							<li class="list-inline-item"><a href="single.html" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">Hacer una oferta</a></li>
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">Como calificarías 
							<br>
							este producto</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer">
						<h5 class="widget-header">Consejo seguros</h5>
						<ul>
							<li>Reunete con el vendedor enn un lugar publico</li>
							<li>Revisa el producto antes de comprarlo</li>
							<li>Pagar despues de adquirir el producto</li>
						
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Tienes un prodcuto para publicar, compartelo con tus usuarios.
						</p>
						<!-- Submii button -->
						<a href="single.html" class="btn btn-transparent-white">Enviar listado</a>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
  

    ';
            }

        
        };
        
    };

}


?>