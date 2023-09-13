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
  <title> Perfil de Administrador</title>

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
						<h5 class="text-center">ADMINISTRADOR</h5>
					</div>
					<div class="widget org">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="images/user/edificio.jpg" alt="" class="">
						</div>
						<!-- User Name -->
						<h5 class="text-center">ORGANIZACIÓN/EMPRESA</h5>
					</div>
					<!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li><a href="index.html">Ventas</a></li>
              <li><a href="index.html">Productos en Stock<span>(5)</span></a></li>
              <li><a href="index.html">Productos Publicados<span>(3)</span></a></li>
              <li><a href="index.html">Opciones Avanzadas</a></li>
            </ul>
          </div>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Editar Perfil</h2>
					<p></p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="widget personal-info">
							<h3 class="widget-header user"><b>Editar Información Personal</b></h3>
							<form action="#">
								<!-- First Name -->
								<div class="form-group">
									<label for="first-name"><b>Nombre</b></label>
									<input type="text" class="form-control" id="first-name">
								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="last-name"><b>Apellido</b></label>
									<input type="text" class="form-control" id="last-name">
								</div>
								<!-- File chooser -->
								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<label for="profile-photo"><b>Adjunte Foto de Perfil</b></label>
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file">
								 </div>

								 
								<!-- Comunity Name -->
								<div class="form-group">
									<label for="comunity-name"><b>Nombre Organización/Empresa</b></label>
									<input type="text" class="form-control" id="comunity-name">
								</div>

								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<label for="company-photo"><b>Adjunte Logo de Organización/Empresa</b></label>
									<input type="file" class="form-control-file mt-2 pt-1" id="input-file">
								 </div>

								<!-- Checkbox -->
								
						<!-- Change Password -->
				
						<h3 class="widget-header user"><b>Cambiar Contraseña</b></h3>
						<form action="#">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password"><b>Contraseña Actual</b></label>
								<input type="password" class="form-control" id="current-password">
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password"><b>Contraseña Nueva</b></label>
								<input type="password" class="form-control" id="new-password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password"><b>Confirmar Nueva Contraseña</b></label>
								<input type="password" class="form-control" id="confirm-password">
							</div>
						</form>
				
					
						<h3 class="widget-header user"><b>Cambiar Correo Electrónico</b></h3>
						<form action="#">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-email"><b>Correo Actual</b></label>
								<input type="email" class="form-control" id="current-email">
							</div>
							<!-- New email -->
							<div class="form-group">
								<label for="new-email"><b>Correo Nuevo</b></label>
								<input type="email" class="form-control" id="new-email">
							</div>
						</form>
								
								<!-- Submit button -->
								<button class="btn btn-transparent"><b>GUARDAR CAMBIOS</b></button>
							</form>
					
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