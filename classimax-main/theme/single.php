<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Classimax | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header/header.css">
  <link rel="stylesheet" href="css/footer/footer.css">



</head>

<body class="body-wrapper">

<?php include("../components/header.php") ?>
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search nice-select-white">
					<form>
						<div class="form-row align-items-center">
							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0">
									<option>Categoria</option>
									<option value="1">Mayor precio</option>
									<option value="2">Menor precio</option>
									<option value="4">Mas reciente</option>
								</select>
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div>
							<div class="form-group col-xl-2 col-lg-3 col-md-6">

								<button type="submit" class="btn btn-primary active w-100">Buscar ahora</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-lg-8">
				<div class="product-details">
					<h1 class="product-title">La laptop GAMER: Experimenta un rendimiento sin igual en un diseño portátil.</h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> Vendido por <a href="user-profile.html"></a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Categoria<a href="category.html">Tecnologia</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Localización<a href="category.html"></a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
						<div class="product-slider-item my-4" data-image="images/products/products-1.jpg">
							<img class="img-fluid w-100" src="images/products/portatil.jpg" alt="product-img">
						</div>
						<div class="product-slider-item my-4" data-image="images/products/products-2.jpg">
							<img class="d-block img-fluid w-100" src="images/products/products-2.jpg" alt="Second slide">
						</div>
						<div class="product-slider-item my-4" data-image="images/products/products-3.jpg">
							<img class="d-block img-fluid w-100" src="images/products/products-3.jpg" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="images/products/products-1.jpg">
							<img class="d-block img-fluid w-100" src="images/products/products-1.jpg" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="images/products/products-2.jpg">
							<img class="d-block img-fluid w-100" src="images/products/products-2.jpg" alt="Third slide">
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
								<p>Un portátil, también conocido como laptop o computadora portátil, es un dispositivo informático compacto y portátil diseñado para facilitar la computación móvil. Está compuesto por varios componentes esenciales que permiten el funcionamiento de un sistema informático completo en un formato compacto y fácil de transportar.</p>

								<iframe width="100%" height="400" src="https://www.youtube.com/embed/LUH7njvhydE?rel=0&amp;controls=0&amp;showinfo=0"
								 frameborder="0" allowfullscreen></iframe>
								<p></p>
								<p>
								CPU: Procesador Intel o AMD.
								RAM: 4 GB o más.
								Almacenamiento: HDD o SSD con capacidad de 128 GB o superior.
								GPU: Integrada o dedicada para gráficos.
								Pantalla: Resolución HD, Full HD o 4K.
								Puertos: USB, HDMI, Ethernet, etc.
								Batería: Autonomía de 4 a 12 horas.
								Sistema Operativo: Windows, macOS o Linux.
								Diseño: Variado, desde ultradelgados hasta más robustos.
								Seguridad: Opciones como huellas digitales o reconocimiento facial.
								</p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Product Specifications</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
											<td>Precio del vendedor</td>
											<td>$450</td>
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
						<p>$230</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="images/user/user-thumb.jpg" alt="">
						<h4><a href="user-profile.html">Alguin</a></h4>
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
<!--============================
=            Footer            =
=============================-->

<?php include("../components/footer.php") ?>


<!-- 
Essential Scripts
=====================================-->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/bootstrap/bootstrap-slider.js"></script>
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>

</body>

</html>