
<?php
require_once ("../controller/mostraInfoAdmin.php");

?>

<link href="./plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="./plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/header/header.css">



<?php





if (isset($_SESSION['AUTENTICADO'])) {
    echo '<header>
        <div class="container" id="menu">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar  navbar-expand-lg navbar-light navigation">
                        <a id="logo" class="navbar-brand" href="index.php">
                            <img src="images/Mi proyecto.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li id="home" class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio</a>
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
                                        <li><a class="dropdown-item @@category" href="productos.php">Productos</a>
                                        </li>
                                        <li><a class="dropdown-item @@category" href="servicios.php">Servicios</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mt-10">
                                <li class="nav-item d-block pt-4 carrito_boton"> </img><a class="nav-link carrito-btn"
                                        href="carrito.php"><img style="width: 28px; height: 28px; margin-right: 10px; margin-bottom: 10px; margin-right:10px;" src="../Uploads/iconos/carrito-de-compras.png">Carrito</a> </li>
                                <li class="nav-item d-block pt-4 carrito_boton"><a class="nav-link carrito-btn"
                                        href="pasarelapagos.php"><img style="width: 28px; height: 28px; margin-right: 10px; margin-bottom: 10px;  margin-right:10px;" src="../Uploads/iconos/dinero.png">Pasarela</a></li>';

    if ($_SESSION['rol'] === 'Administrador') {
        echo '<li class="nav-item d-block pt-4 carrito_boton"><a class="nav-link carrito-btn"
                                    href="../views/administrador/home.php"><img style="width: 28px; height: 28px; margin-right: 10px; margin-bottom: 10px;  margin-right:10px;" src="../Uploads/iconos/usuario.png">Cuenta</a></li>';
    } elseif ($_SESSION['rol'] === 'Cliente') {
        // Agrega más casos según los diferentes roles que puedas tener
        echo '<li class="nav-item d-block pt-4 carrito_boton"><a class="nav-link carrito-btn"
                                    href="../views/cliente/usuario.php"><img style="width: 28px; height: 28px; margin-right: 10px; margin-bottom: 10px;  margin-right:10px;" src="../Uploads/iconos/usuario.png">Cuenta</a></li>';
    } else {
        // Redirección por defecto
        echo '<li class="nav-item d-block pt-4 carrito_boton"><a class="nav-link carrito-btn"
                                    href="../views/emprendedor/emprendedor.php"><img style="width: 28px; height: 28px; margin-right: 10px; margin-bottom: 10px;  margin-right:10px;" src="../Uploads/iconos/usuario.png">Cuenta</a></li>'; 
    }

    echo '</ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>';
} else {
    echo '
    <header>
    <div class="container" id="menu">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar  navbar-expand-lg navbar-light navigation">
                    <a id="logo" class="navbar-brand" href="index.php">
                        <img src="images/Mi proyecto.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li id="home" class="nav-item active">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item @@pages">
                                <a class="nav-link @@about" href="about-us.php" aria-haspopup="true"
                                    aria-expanded="false">
                                    Sobre nosotros
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide @@listing">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    ariaexpanded="false">
                                    Categorias<span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item @@category" href="productos.php">Productos</a>
                                    </li>
                                    <li><a class="dropdown-item @@category" href="servicios.php">Servicios</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            <li id="login-btn" class="nav-item d-block pt-4">
                                <a class="nav-link login-button" href="login.php">Ingresar</a>
                            </li>
                            <li id="signup-btn" class="nav-item d-block pt-4">
                                <a class="nav-link ingresar-btn add-button" href="register.php">Registrate</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>';


};


							
						