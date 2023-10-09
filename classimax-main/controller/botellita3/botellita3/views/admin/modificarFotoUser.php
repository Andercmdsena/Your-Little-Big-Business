<!DOCTYPE html>
<html lang="en">
<?php
    require_once("../../model/validarSesion.php");
    require_once("../../model/seguridadAdmin.php");

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador BOTELLITA S&W </title>

<!-- ================= Favicon ================== -->
<!-- Standard -->
<link rel="shortcut icon" href="../extras/logos/favicon.png" type="image/x-icon">

    <!-- Toastr -->
    <link href="../dashboard/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="../dashboard/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="../dashboard/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../dashboard/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="../dashboard/css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="../dashboard/css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="../dashboard/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="../dashboard/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="../dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="../dashboard/css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="../dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="../dashboard/css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="../dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="../dashboard/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo">
                    <a href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> -->
                        <span>BOTELLITA S&W</span>
                    </a>
                </div>
                <ul>
                    <li class="label">Menú</li>
                    <li>
                        <a href="home.php" >
                            <i class="ti-home"></i> Inicio
                    
                        </a>
                    </li>

            
                    <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-user"></i> Usuarios
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrarUser.php">
                                <i class="ti-pencil"> </i>Registrar</a>
                            </li>
                        
                            <li>
                                <a href="verUser.php">
                                   <i class="ti-eye"> </i>Ver</a>
                            </li> 
                        </ul>
                        
                        <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-clipboard"></i> Inventario
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="resgistrarInventario.php">
                                <i class="ti-pencil"> </i>Registrar</a>
                            </li>
                            <li>
                                <a href="verInventario.php">
                                <i class="ti-eye"> </i>Ver</a>
                            </li>
                        </ul>

                        <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-package"></i> Proveedores
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrarProveedores.php">
                                <i class="ti-pencil"> </i>Registrar</a>
                            </li>
                            <li>
                                <a href="verProv.php">
                                   <i class="ti-eye"> </i>Ver</a>
                            </li>
                        </ul>

                        <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-shopping-cart"></i> Ventas
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrarVentas.php">
                                <i class="ti-pencil"> </i>Registrar</a>
                            </li>
                            <li>
                                <a href="verVentas.php">
                                <i class="ti-eye"> </i>Ver</a>
                            </li>
                        </ul>

                        <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-wand"></i>Productos
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="registrarProductos.php">
                                <i class="ti-pencil"> </i>Registrar</a>
                            </li>
                            <li>
                                <a href="verProductos.php">
                                   <i class="ti-eye"> </i>Ver</a>
                            </li>
                        </ul>

                        <li>
                        <a href="../../controller/cerrarSesion.php">
                            <i class="ti-close"></i> Cerrar Sesión</a>
                    </li>

                    
                </ul>
                
                        
                        
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="../dashboard/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                               
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                            <a href="../../controller/cerrarSesion.php">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hola,
                                    <span>Bienvenido administrador</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Home admi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="../../controller/modificarFotoUserAdmin.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">

                                            <?php

                                                $id_variable=$_GET['id_user'];
                                                echo'
                                                <div class="form-group col-md-4">
                                                    <label>Id Usuario</label>
                                                    <input type="number" name="identificacion" readonly value="'.$id_variable.'" accept=".jpg, .png, .gif" class="form-control" placeholder="">
                                                </div>
                                                ';
                                            ?>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Foto Usuario</label>
                                                    <input type="file" name="fotoa" accept=".jpg, .png, .gif, .jpeg" class="form-control" placeholder="">
                                                </div>

                                                

                                            </div>
                                            
                                            <button type="submit" class="btn btn-default primary">Cambiar foto</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    
                        <!-- /# column -->
                    </div>
                </section>
            </div>
        </div>
    </div>




    <!-- Common -->
    <script src="../dashboard/js/lib/jquery.min.js"></script>
    <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../dashboard/js/scripts.js"></script>

    <!-- Calender -->
    <script src="../dashboard/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="../dashboard/js/lib/moment/moment.js"></script>
    <script src="../dashboard/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="../dashboard/js/lib/calendar/fullcalendar-init.js"></script>

    <!--  Flot Chart -->
    <script src="../dashboard/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="../dashboard/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="../dashboard/js/lib/flot-chart/curvedLines.js"></script>
    <script src="../dashboard/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../dashboard/js/lib/flot-chart/flot-chart-init.js"></script>

    <!--  Chartist -->
    <script src="../dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dashboard/js/lib/chartist/chartist-init.js"></script>

    <!--  Chartjs -->
    <script src="../dashboard/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../dashboard/js/lib/chart-js/chartjs-init.js"></script>

    <!--  Knob -->
    <script src="../dashboard/js/lib/knob/jquery.knob.min.js "></script>
    <script src="../dashboard/js/lib/knob/knob.init.js "></script>

    <!--  Morris -->
    <script src="../dashboard/js/lib/morris-chart/raphael-min.js"></script>
    <script src="../dashboard/js/lib/morris-chart/morris.js"></script>
    <script src="../dashboard/js/lib/morris-chart/morris-init.js"></script>

    <!--  Peity -->
    <script src="../dashboard/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="../dashboard/js/lib/peitychart/peitychart.init.js"></script>

    <!--  Sparkline -->
    <script src="../dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../dashboard/js/lib/sparklinechart/sparkline.init.js"></script>

    <!-- Select2 -->
    <script src="../dashboard/js/lib/select2/select2.full.min.js"></script>

    <!--  Validation -->
    <script src="../dashboard/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../dashboard/js/lib/form-validation/jquery.validate-init.js"></script>

    <!--  Circle Progress -->
    <script src="../dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../dashboard/js/lib/circle-progress/circle-progress-init.js"></script>

    <!--  Vector Map -->
    <script src="../dashboard/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../dashboard/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../dashboard/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <script src="../dashboard/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

    <!--  Simple Weather -->
    <script src="../dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../dashboard/js/lib/weather/weather-init.js"></script>

    <!--  Owl Carousel -->
    <script src="../dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!--  Calender 2 -->
    <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../dashboard/js/lib/calendar-2/pignose.init.js"></script>


    <!-- Datatable -->
    <script src="../dashboard/js/lib/data-table/datatables.min.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="../dashboard/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../dashboard/js/lib/data-table/jszip.min.js"></script>
    <script src="../dashboard/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../dashboard/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../dashboard/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../dashboard/js/lib/data-table/datatables-init.js"></script>

    <!-- JS Grid -->
    <script src="../dashboard/js/lib/jsgrid/db.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="../dashboard/js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="../dashboard/js/lib/jsgrid/jsgrid-init.js"></script>

    <!--  Datamap -->
    <script src="../dashboard/js/lib/datamap/d3.min.js"></script>
    <script src="../dashboard/js/lib/datamap/topojson.js"></script>
    <script src="../dashboard/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="../dashboard/js/lib/datamap/datamap-init.js"></script>

    <!--  Nestable -->
    <script src="../dashboard/js/lib/nestable/jquery.nestable.js"></script>
    <script src="../dashboard/js/lib/nestable/nestable.init.js"></script>

    <!--ION Range Slider JS-->
    <script src="../dashboard/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../dashboard/js/lib/rangeSlider/moment.js"></script>
    <script src="../dashboard/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="../dashboard/js/lib/rangeSlider/rangeslider.init.js"></script>

    <!-- Bar Rating-->
    <script src="../dashboard/js/lib/barRating/jquery.barrating.js"></script>
    <script src="../dashboard/js/lib/barRating/barRating.init.js"></script>

    <!-- jRate -->
    <script src="../dashboard/js/lib/rating1/jRate.min.js"></script>
    <script src="../dashboard/js/lib/rating1/jRate.init.js"></script>

    <!-- Sweet Alert -->
    <script src="../dashboard/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="../dashboard/js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Toastr -->
    <script src="../dashboard/js/lib/toastr/toastr.min.js"></script>
    <script src="../dashboard/js/lib/toastr/toastr.init.js"></script>





























    <!--  Dashboard 1 -->
    <script src="js/dashboard1.js"></script>
    <script src="js/dashboard2.js"></script>

</body>

</html>