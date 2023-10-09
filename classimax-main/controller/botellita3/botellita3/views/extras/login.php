<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login: BotellitaS&W</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="logos/favicon.png" type="image/x-icon">

    <!-- Styles -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body class="bg-login">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="../../index.html"><img src="logos/Logobotellita.png" alt=""></a>
                        </div>
                        <div class="login-form">
                            <h4>Iniciar sesión</h4>
                            <form action="../../controller/iniciarSesion.php" method="POST">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" name="clave" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label class="pull-right">
										<a href="reset-password.php">Olvide mi contraseña?</a>
									</label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Iniciar sesión</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> -->
                                <div class="register-link m-t-15 text-center">
                                    <p>¿No tienes una cuenta? <a href="register.php"> Registrate</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>