<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Botellita S&W:Recuperar</title>

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

<body class="bg-primary-proyecto">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                        <a href="../../index.html"><img src="logos/Logobotellita.png" alt=""></a>
                        </div>
                        <div class="login-form1">
                            <h4>Recuperar contraseña</h4>
                            <form action="../../controller/resetearClave.php" method="POST">
                            <div class="form-group">
                                    <label>Identificación:</label>
                                    <input type="number" name="identificacion" class="form-control" placeholder="12684506">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="@example.com">
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-15">Enviar</button>
                                <div class="register-link text-center">
                                    <p>Regresa <a href="login.php">Iniciar Sesión</a></p>
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