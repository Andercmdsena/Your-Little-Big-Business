<?php


require_once ("../../model/conexion.php");
require_once ("../../model/consultas.php");
require_once ("../../model/seguridadEmprendedor.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu Emprendedor</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link href="../../theme/images/Mi proyecto.png" rel="icon">


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
                        <a href="emprendedor.php">
                            <i class="ti-home"></i>Inicio</a>
                    </li>
                    <li>
                        
                        <ul>
                           
                            
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-money"></i> Productos
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registroProductos.php"><i class="ti-shopping-cart"></i>Registro productos</a>
                            </li>
                            <li>
                                <a href="verProductos.php"> <i class="ti-eye"></i> Ver Productos</a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-money"></i> Servicios
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            
                            <li>
                                <a href="registroServicios.php"><i class="ti-shopping-cart"></i>Registro servicios</a>
                            </li>
                            <li>
                                <a href="verServicio.php"> <i class="ti-eye"></i> Ver Servicios</a>
                            </li>
                            
                            
                        </ul>
                    </li>






                    
                  
                    <?php

                    perfilUsuario()
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    