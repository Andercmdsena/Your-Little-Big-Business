<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Botellita S&W:Registro</title>

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
                        <div class="login-form">
                            <h4>Formulario de registro</h4>
                            <p>Este formulario es para ser cliente de nuestra tienda</p>
                            <form action="../../controller/registrarUserE.php" method="POST">
                                <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Tipo de documento</label>
                                    <select name="tipoDoc" class="form-control" id="">
                                        <option >Select</option>
                                        <option value="CC">CC</option>
                                        <option value="CE">CE</option>
                                        <option value="PASAPORTE">PASAPORTE</option>
                                    </select>
                                    <!-- <input type="email" class="form-control"  required> -->
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Numero de documento</label>
                                    <input type="number" name="numeroID" class="form-control" placeholder="ID number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nombres</label>
                                    <input type="text" name="nombres" class="form-control" placeholder="Name" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Apellidos</label>
                                    <input type="text" name="apellidos" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telefono</label>
                                    <input type="number" name="telefono" class="form-control" placeholder="Telephone number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Contraseña</label>
                                    <input type="password" name="contrasena" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirmar contraseña</label>
                                    <input type="password" name="contrasenaB" class="form-control" placeholder="Password">
                                </div>
                                </div>
                                <div class="checkbox">
                                    <label>
										Al registrarte aceptarás nuestros<a href="#" data-toggle="modal" data-target="#staticBackdrop" style="color:#ff9800"> Términos y condiciones </a>
									</label> 
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarse</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Register with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Register with twitter</button>
                                    </div>
                                </div> -->
                                <div class="register-link m-t-15 text-center">
                                    <p>¿Ya tienes una cuenta? <a href="login.php"  > Iniciar sesión</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Terminos y condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p style="color:#000000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, voluptate nostrum accusamus repellendus est molestiae facere dolor, reprehenderit expedita itaque, quisquam eligendi dignissimos porro earum totam eaque assumenda aliquam! Aliquam dicta vitae, sit vel ex sint. Totam aspernatur quis ratione qui, earum voluptatum eveniet vitae. Est voluptates, eveniet maxime cum hic sint officia eius sequi recusandae reprehenderit, distinctio suscipit, neque illo. Sit quibusdam facere magni animi quasi porro cum temporibus magnam. Voluptates ut molestias, nostrum maxime tenetur ad dolorem! Ea deserunt consectetur explicabo quis quo autem nostrum? Nihil ullam recusandae sint soluta eum magni, error obcaecati deserunt, praesentium quos, iste incidunt est officiis accusantium ea inventore eaque. Nostrum obcaecati ea laboriosam quibusdam quas quisquam cupiditate, pariatur laudantium doloribus est, delectus dolorum? Sequi ea a nostrum alias asperiores? Omnis, vitae inventore. At quo ad illum dolor molestiae omnis sequi dignissimos ab mollitia alias est ipsum quibusdam nisi quod, officia, deleniti voluptate ducimus aliquid harum tempore provident. Reiciendis, deserunt. Quis, adipisci distinctio? Nihil laboriosam possimus praesentium necessitatibus impedit voluptas mollitia maxime minus veniam sequi magni corrupti doloremque aperiam officia amet, dolores accusantium! Mollitia eaque quod odio incidunt nam veritatis magni optio facere, rem cum veniam esse deleniti laborum sit similique labore vitae.</p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>