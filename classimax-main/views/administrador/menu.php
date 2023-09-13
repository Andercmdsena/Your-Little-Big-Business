<?php


require_once ("../../model/conexion.php");
require_once ("../../model/consultas.php");
require_once ("../../model/seguridadAdmin.php");

require_once ("../../controller/mostraInfoAdmin.php");
require_once ("../../controller/mostrarInfoUsuario.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

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
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano ">
            <div class="nano-content" id="panel_izq">
                <div class="logo">
                    <a href="../../theme/index.php">
                        <img src="../../theme/images/Mi proyecto.png" alt="" /> 
                        
                    </a>
                </div>
                <ul>
                    

                    <li class="label">Modulos</li>
                    <li>
                        <a href="home.php">
                            <i class="ti-home"></i>Inicio</a>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-user"></i> usuarios
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrar_admin.php"><i class="ti-plus"></i> Registrar Administrador</a>
                            </li>
                            <li>
                                <a href="registrar_usuario.php"><i class="ti-plus"></i> Registrar Usuario</a>
                            </li>
                            <li>
                                <a href="ver_usuario_admin.php"> <i class="ti-eye"></i> Ver Administradores</a>
                            </li>
                            <li>
                                <a href="ver_usuarioo.php"> <i class="ti-eye"></i> Ver Usuarios</a>
                            </li>
                            <li>
                                <a href="reportes-administradores.php"> <i class="ti-download"></i>Reportes administradores</a>
                            </li>
                            <li>
                                <a href="reportes-usuarios.php"> <i class="ti-download"></i>Reportes usuarios</a>
                            </li>
                           
                            
                        </ul>
                    </li>
                    <!-- <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-money"></i> Ventas
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="chart-flot.html"><i class="ti-shopping-cart"></i> N° Ventas</a>
                            </li>
                            <li>
                                <a href="chart-morris.html"> <i class="ti-eye"></i> Ver</a>
                            </li>
                            
                        </ul>
                    </li> -->



                    <?php

                     perfilAdmin()
                    ?>



                    
                  
                </ul>
            </div>
        </div>
    </div>
    