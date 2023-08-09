<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <title>Modal role</title>

    <style>
        #selected {
            border: 2px solid #5672f9;
        }
    </style>
</head>

<body style="box-sizing: border-box;">
    <section style="width: 100vw; height: 100vh;" class="border border-dark d-flex align-items-center">
        <div class="container p-4 h-50 w-50 border border-primary">
            <form style="margin: 0 auto;" class="row p-2 h-100 w-100" action="../controller/Role.php" method="post">
                <h4>Para empezar llena los siguientes datos</h4>
                <div class="col-12">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="inputName">
                </div>
                <div class="col-12">
                    <label for="inputLastName" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="inputLastName">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input id="emailInput" type="email" name="emaill" class="form-control" id="inputEmail">
                </div>
                <div class="col-12 mb-3">
                    <select class="form-select w-100 p-2 border rounded-4" name="rol" aria-label="Default select example">
                        <option selected>Elige tu rol</option>
                        <option value="seller">Emprendedor</option>
                        <option value="customer">Comprador</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

        </div>
    </section>

    <!-- Controlador de modal de rol con firebase -->
    <script type="module" src="../controller/firebase/modalRole.js"></script>
</body>

</html>