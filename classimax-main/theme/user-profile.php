<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");
require_once("../controller/mostrarInfoUsuario.php");

?>;


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
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="images/user/user-thumb.jpg" alt="" class="">
						</div>
						<!-- User Name -->
						<h5 class="text-center">Samanta Doe</h5>
					</div>
					<!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
			<?php 
			cargarUsuarioPerfil();
			
			?>
            </ul>
          </div>
				</div>
			</div>
			<div class="col-lg-8" id="informacion_per">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Edita tu perfil</h2>
					<p>En esta sección puedes actualizar tus datos y gestionar las configuracción de tu perfil</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row" id="cold">
					<div class="col-lg-6 col-md-6">
						<div class="widget " >
							<h3 class="widget-header user">Edita perfil</h3>
							<form action="#">
								<!-- First Name -->
								<div class="form-group personal-info">
									<label for="first-name">Nombres</label>
									<input type="text" class="form-control" id="first-name">
								</div>
								<!-- Last Name -->
								<div class="form-group personal-info">
									<label for="last-name">Apellidos</label>
									<input type="text" class="form-control" id="last-name">
								</div>
								<!-- File chooser -->
								<div class="form-group personal-info choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file">
								 </div>
								<!-- Comunity Name -->
								<div class="form-group personal-info">
									<label for="comunity-name">Pais</label>
									<input type="text" class="form-control" id="comunity-name">
								</div>
								<!-- Checkbox -->
								<div class="form-check">
								  <label class="form-check-label" for="hide-profile">
									<input class="form-check-input mt-1" type="checkbox" value="" id="hide-profile">
									Perfil privado	
								  </label>
								</div>
								<!-- Zip Code -->
								<div class="form-group  personal-info">
									<label for="zip-code">Codigo postal</label>
									<input type="text" class="form-control" id="zip-code">
								</div>
								<!-- Submit button -->
								<button class="btn btn-transparent btn-perfil">Guardar mis cambios</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Editar contraseña</h3>
						<form action="#">
							<!-- Current Password -->
							<div class="form-group personal-info">
								<label for="current-password">Antigua contraseña</label>
								<input type="password" class="form-control" id="current-password">
							</div>
							<!-- New Password -->
							<div class="form-group personal-info">
								<label for="new-password">Nueva contraseña</label>
								<input type="password" class="form-control" id="new-password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group personal-info">
								<label for="confirm-password">Confirmar nueva contraseña</label>
								<input type="password" class="form-control" id="confirm-password">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent btn-perfil">Cambiar contraseña</button>
						</form>
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Editar dirección de correo</h3>
						<form action="#">
							<!-- Current Password -->
							<div class="form-group personal-info">
								<label for="current-email">Antiguo correo</label>
								<input type="email" class="form-control " id="current-email">
							</div>
							<!-- New email -->
							<div class="form-group personal-info">
								<label for="new-email">Nuevo correo</label>
								<input type="email" class="form-control" id="new-email">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent btn-perfil btn-perfil" id="btn-perfil">Cambiar correo</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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