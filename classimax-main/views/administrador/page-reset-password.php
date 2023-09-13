<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="../Dashboard/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="../Dashboard/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="../Dashboard/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="../Dashboard/css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="../Dashboard/css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="../Dashboard/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="../Dashboard/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="../Dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="../Dashboard/css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="../Dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../Dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="../Dashboard/css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="../Dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="../Dashboard/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="../Dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../Dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../Dashboard/css/style.css" rel="stylesheet">
    <link href="../../theme/css/style_dash.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #BDD0FF;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 500px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #7C3FF6;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }

        input {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            display: flex;
        }

        input:focus {
            border-color: #007BFF;
        }

        button[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            background-color: #7C3FF6;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #b18df8;
        }

        .message {
            font-size: 14px;
            color: #888;
        }
        a {
            text-decoration: none;
            color: #7C3FF6;
        }
        a:hover {
            cursor: pointer;
            color: #b18df8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Recuperación de Contraseña</h2>
        <form action="../../controller/generarClave.php" method="post">
            <label for="id">Identificacion</label>
            <input type="number" name="identificacion" require>
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" required>
            <button type="submit">Enviar solicitud</button>
        </form>
        <p class="message">Te enviaremos un correo con tu nueva contraseña</p> <a href="#">Volver al inicio de sesion</a>
    </div>
</body>
</html>