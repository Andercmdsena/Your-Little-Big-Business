<link href="./plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="./plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/header/header.css">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="images/Mi proyecto.png" alt="" style="width: 50px ; height: 50px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item @@pages">
								<a class="nav-link @@about" href="about-us.php" aria-haspopup="true"
									aria-expanded="false">
									Sobre nosotros
								</a>
							</li>
							<li class="nav-item dropdown dropdown-slide @@listing">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Categorias<span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item @@category" href="category.php">Productos</a>
									</li>
									<li><a class="dropdown-item @@category" href="category.php">Servicios</a></li>
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li id="login-btn" class="nav-item">
								<a class="nav-link login-button" href="login.php">Login</a>
							</li>
							<li id="signup-btn" class="nav-item">
								<a class="nav-link text-white add-button" href="register.php">Ingresar</a>
							</li>
							<li id="carrito"><a class="nav-link" href="#">Carrito</a></li>
						</ul>

					</div>
				</nav>
			</div>
		</div>
	</div>
</header>