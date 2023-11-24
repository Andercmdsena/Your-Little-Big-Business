<?php include_once("../controller/Main.php");
require_once("../controller/publicaciones.php");
require_once ("../controller/mostrarInfoProductos.php");
require_once("../model/conexion.php");
require_once("../model/consultas.php");
?>

<!DOCTYPE html>


<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>YLBB | You Little Big Business</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="classimax"/>

  <!-- favicon -->
  <link href="images/Mi proyecto.png" rel="shortcut icon">

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

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly" id="hero">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Encuentra todo lo que necesitas</h1>
					<p>Explora nuestra amplia gama de productos y servicios <br> para encontrar todo lo que necesitas</p>
					<div class="short-popular-category-list text-center">
						<h2>Categorías</h2>
						<ul class="list-inline"> 
							<li class="list-inline-item">
								<a href="productos.php"><i class="fa fa-bed"></i>Libros</a></li>
							<li class="list-inline-item">
								<a href="productos.php"><i class="fa fa-grav"></i>Deportes</a>
							</li>
							<li class="list-inline-item">
								<a href="productos.php"><i class="fa fa-car"></i>Refacciones</a>
							</li>
							<li class="list-inline-item">
								<a href="servicios.php"><i class="fa fa-cutlery"></i>Comida</a>
							</li>
							<li class="list-inline-item">
								<a href="productos.php"><i class="fa fa-coffee"></i>Estudio</a>
							</li>
						</ul>
					</div>

				</div>
				<!-- Advance Search -->
				<div class="advance-search" id="busqueda_avanzada">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-md-12 align-content-center">
								<form>
									<div class="form-row">
										<div class="form-group col-xl-4 col-lg-3 col-md-6">
											<input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
												placeholder="¿Qué estas buscando?">
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<select class="w-100 form-control mt-lg-1 mt-md-2">
												<option>Categoría</option>
												<option value="1">Cocina y hogar</option>
												<option value="2">Tecnología</option>
												<option value="4">libros</option>
											</select>
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Localidad">
										</div>
										<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
											<button type="submit" class="btn btn-primary active w-100">Buscar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray" id="carrusel_index">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Productos mas destacados</h2>
					<p>Vez algo que te guste o te llame la atención?</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
						<?php
							cargarPublicacionCarrusel()

							?>



					</div>
				
			
		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section" id="seccion_categoria">
	<!-- Container Start -->
	<div class="container">
		<div class="row" id="cartas">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Todas las categorías</h2>
					<p>Todo lo que buscas y necesitas en la palma de tu mano, a un solo clic</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 ">
						<div class="category-block cat_item ">
							<div class="header">
								<i class="fa fa-laptop icon-bg-1"></i>
								<h4>Tecnología</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="productos.php">Computadores <span>93</span></a></li>
								<li><a class="juas" href="productos.php">Celulares<span>233</span></a></li>
								<li><a class="juas" href="productos.php">Licencias<span>183</span></a></li>
								<li><a class="juas" href="productos.php">Pantallas<span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item ">
							<div class="header">
								<i class="fa fa-apple icon-bg-2"></i>
								<h4>Restaurantes</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="servicios.php">Comidas <span>393</span></a></li>
								<li><a class="juas" href="servicios.php">Bebidas <span>23</span></a></li>
								<li><a class="juas" href="servicios.php">Comida rapido <span>13</span></a></li>
								<li><a class="juas" href="servicios.php">Comida saludable<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i>
								<h4>Cosas para el hogar</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="productos.php">Muebles <span>93</span></a></li>
								<li><a class="juas" href="productos.php">Electrodomesticos <span>23</span></a></li>
								<li><a class="juas" href="productos.php">Decoraciones <span>83</span></a></li>
								<li><a class="juas" href="productos.php">Plantas <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item">
							<div class="header">
								<i class="fa fa-shopping-basket icon-bg-4"></i>
								<h4>Infantil</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="productos.php">Juguetes <span>53</span></a></li>
								<li><a class="juas" href="productos.php">Ropa <span>212</span></a></li>
								<li><a class="juas" href="productos.php">Libros <span>133</span></a></li>
								<li><a class="juas" href="productos.php">Carros <span>143</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item">
							<div class="header">
								<i class="fa fa-briefcase icon-bg-5"></i>
								<h4>Trabajo</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="productos.php">Archivo <span>93</span></a></li>
								<li><a class="juas" href="productos.php">Carpetas <span>233</span></a></li>
								<li><a class="juas" href="productos.php">Boligrafos <span>183</span></a></li>
								<li><a class="juas" href="productos.php">Oficina <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item">
							<div class="header">
								<i class="fa fa-car icon-bg-6"></i>
								<h4>Vehículos</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="productos.php">Refacciones <span>193</span></a></li>
								<li><a class="juas" href="productos.php">Aceite <span>23</span></a></li>
								<li><a class="juas" href="productos.php">Faros <span>33</span></a></li>
								<li><a class="juas" href="productos.php">otros <span>73</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item">
							<div class="header">
								<i class="fa fa-paw icon-bg-7"></i>
								<h4>Mascotas</h4>
							</div>
							<ul class="category-list">
								<li><a class="juas" href="productos.php">Shampo <span>65</span></a></li>
								<li><a class="juas" href="productos.php">Camas <span>23</span></a></li>
								<li><a class="juas" href="productos.php">Juguetes <span>113</span></a></li>
								<li><a class="juas" href="productos.php">otros <span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block cat_item">

							<div class="header">
								<i class="fa fa-laptop icon-bg-8"></i>
								<h4>Servicios</h4>
							</div>
							<ul class="category-list">
								<li ><a class="juas" href="servicios.php">Limpieza <span>93</span></a></li>
								<li ><a class="juas" href="servicios.php">Cocina <span>233</span></a></li>
								<li ><a class="juas" href="servicios.php">Asesoramiento legal <span>183</span></a></li>
								<li ><a class="juas" href="servicios.php">Otros <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->


				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Empieza hoy a publicar tu emprendimiento y crecer</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="botons" href="productos.php">Busca tus productos</a></li>
						<li class="list-inline-item"><a class="botons" href="servicios.php">Busca tus servicios</a></li>
					</ul>
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



