<?php


require_once ("../../model/conexion.php");
require_once ("../../model/consultas.php");
require_once ("../../controller/mostrarInfoEmprendedor.php");
require_once ("../../model/seguridadEmprendedor.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YLBB | Administrador</title>

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

    <?php

    include"menu_emprendedor.php"


    ?>
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
                                    <span>Bienvenido a la vista de usuario</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                   
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Nuevo Producto</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                    <form action="../../controller/registrarProducto.php" method="POST" enctype="multipart/form-data">
                                
                                <div class="row formulario">
                                    <div class="form-group col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Computador, celular" name="nombre_pro">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Precio</label>
                                        <input type="text" class="form-control" placeholder="200000" name="precio_pro">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cantidad</label>
                                        <input type="text" class="form-control" placeholder="1, 2, 3" name="cantidad">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Categoria</label>
                                        <select name="categoria" id="" class="form-control">
                                            <option value="">Seleccione la categoria</option>
                                            <option value="1">Tecnologia</option>
                                            <option value="2">Moda</option>
                                            <option value="3">Salud y belleza</option>
                                            <option value="4">Deportes</option>
                                            <option value="5">Bebes y juegos</option>
                                            <option value="6">Alimentos y bebidas</option>
                                            <option value="7">Oficina</option>
                                            <option value="8">Hogar</option>
                                            <option value="9">Mascotas</option>
                                            <option value="10">Libros y medios</option>
                                           

                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div>Descripción</div>
                                        <textarea name="descripcion" id="" cols="50" rows="5"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                    <label>Foto 1</label>
                                    <input type="file" class="form-control" name="foto" accept=".jpg, .jpeg, .png, .gif">
                                    <label>Foto 2</label>
                                    <input type="file" class="form-control" name="foto2" accept=".jpg, .jpeg, .png, .gif">
                                    <label>Foto 3</label>
                                    <input type="file" class="form-control" name="foto3" accept=".jpg, .jpeg, .png, .gif">
                                    </div>


                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Crear nuevo producto</button>
                                
                                
                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        
                        <!-- /# column -->
                    </div>
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2023 © Admin Board. - <a href="#">Your Little Big Business</a></p>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>




    <!-- Common -->
    <script src="../Dashboard/js/lib/jquery.min.js"></script>
    <script src="../Dashboard/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../Dashboard/js/lib/menubar/sidebar.js"></script>
    <script src="../Dashboard/js/lib/preloader/pace.min.js"></script>
    <script src="../Dashboard/js/lib/bootstrap.min.js"></script>
    <script src="../Dashboard/js/scripts.js"></script>

    <!-- Calender -->
    <script src="../Dashboard/js/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="../Dashboard/js/lib/moment/moment.js"></script>
    <script src="../Dashboard/js/lib/calendar/fullcalendar.min.js"></script>
    <script src="../Dashboard/js/lib/calendar/fullcalendar-init.js"></script>

    <!--  Flot Chart -->
    <script src="../Dashboard/js/lib/flot-chart/excanvas.min.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.pie.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.time.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.stack.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.resize.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/curvedLines.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../Dashboard/js/lib/flot-chart/flot-chart-init.js"></script>

    <!--  Chartist -->
    <script src="../Dashboard/js/lib/chartist/chartist.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="../Dashboard/js/lib/chartist/chartist-init.js"></script>

    <!--  Chartjs -->
    <script src="../Dashboard/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../Dashboard/js/lib/chart-js/chartjs-init.js"></script>

    <!--  Knob -->
    <script src="../Dashboard/js/lib/knob/jquery.knob.min.js "></script>
    <script src="../Dashboard/js/lib/knob/knob.init.js "></script>

    <!--  Morris -->
    <script src="../Dashboard/js/lib/morris-chart/raphael-min.js"></script>
    <script src="../Dashboard/js/lib/morris-chart/morris.js"></script>
    <script src="../Dashboard/js/lib/morris-chart/morris-init.js"></script>

    <!--  Peity -->
    <script src="../Dashboard/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="../Dashboard/js/lib/peitychart/peitychart.init.js"></script>

    <!--  Sparkline -->
    <script src="../Dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="../Dashboard/js/lib/sparklinechart/sparkline.init.js"></script>

    <!-- Select2 -->
    <script src="../Dashboard/js/lib/select2/select2.full.min.js"></script>

    <!--  Validation -->
    <script src="../Dashboard/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../Dashboard/js/lib/form-validation/jquery.validate-init.js"></script>

    <!--  Circle Progress -->
    <script src="../Dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="../Dashboard/js/lib/circle-progress/circle-progress-init.js"></script>

    <!--  Vector Map -->
    <script src="../Dashboard/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../Dashboard/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../Dashboard/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <script src="../Dashboard/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

    <!--  Simple Weather -->
    <script src="../Dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../Dashboard/js/lib/weather/weather-init.js"></script>

    <!--  Owl Carousel -->
    <script src="../Dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../Dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!--  Calender 2 -->
    <script src="../Dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="../Dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="../Dashboard/js/lib/calendar-2/pignose.init.js"></script>


    <!-- Datatable -->
    <script src="../Dashboard/js/lib/data-table/datatables.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/jszip.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../Dashboard/js/lib/data-table/datatables-init.js"></script>

    <!-- JS Grid -->
    <script src="../Dashboard/js/lib/jsgrid/db.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="../Dashboard/js/lib/jsgrid/jsgrid-init.js"></script>

    <!--  Datamap -->
    <script src="../Dashboard/js/lib/datamap/d3.min.js"></script>
    <script src="../Dashboard/js/lib/datamap/topojson.js"></script>
    <script src="../Dashboard/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="../Dashboard/js/lib/datamap/datamap-init.js"></script>

    <!--  Nestable -->
    <script src="../Dashboard/js/lib/nestable/jquery.nestable.js"></script>
    <script src="../Dashboard/js/lib/nestable/nestable.init.js"></script>

    <!--ION Range Slider JS-->
    <script src="../Dashboard/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/moment.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="../Dashboard/js/lib/rangeSlider/rangeslider.init.js"></script>

    <!-- Bar Rating-->
    <script src="../Dashboard/js/lib/barRating/jquery.barrating.js"></script>
    <script src="../Dashboard/js/lib/barRating/barRating.init.js"></script>

    <!-- jRate -->
    <script src="../Dashboard/js/lib/rating1/jRate.min.js"></script>
    <script src="../Dashboard/js/lib/rating1/jRate.init.js"></script>

    <!-- Sweet Alert -->
    <script src="../Dashboard/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="../Dashboard/js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Toastr -->
    <script src="../Dashboard/js/lib/toastr/toastr.min.js"></script>
    <script src="../Dashboard/js/lib/toastr/toastr.init.js"></script>





























    <!--  Dashboard 1 -->
    <script src="../Dashboard/js/dashboard1.js"></script>
    <script src="../Dashboard/js/dashboard2.js"></script>

</body>

</html>