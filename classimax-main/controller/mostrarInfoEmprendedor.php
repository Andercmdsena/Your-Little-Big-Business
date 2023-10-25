<?php
function cargarUsuario(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUsuario();

    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['Nombre'].'</td>
                <td>'.$f['Apellido'].'</td>
                <td>'.$f['Rol'].'</td>
                <td>'.$f['Email'].'</td>
                <td>
                    <a href="../../views/administrador/modificar.php?id='.$f['ID'].'" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUsuario.php?id='.$f['ID'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
        
    }
}
function cargarUsuarioPerfil(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUsuarioPerfil();

    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td>'.$f['Nombre'].'</td>
                <td>'.$f['Apellido'].'</td>
                <td>'.$f['Rol'].'</td>
                <td>'.$f['Email'].'</td>
                <td>
                    <a href="../../views/administrador/modificar.php?id='.$f['ID'].'" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUsuario.php?id='.$f['ID'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
        
    }
}
function reportesUsuarioPerfil(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUsuarioPerfil();

    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td>'.$f['Nombre'].'</td>
                <td>'.$f['Apellido'].'</td>
                <td>'.$f['Email'].'</td>    
                <td>'.$f['Rol'].'</td>
                <td>'.$f['Estado'].'</td>
            <tr>';
        }
        
    }
}

function verEmprendedor(){
    $id = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->verPerfilEmprendedor($id);

    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
            echo '
            <section id="datosEmprendedor">
                <div class="container">
                    <h2 style="margin-bottom: 25px;">Datos de Emprendedor</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 foto_perfil">
                            <img src="../'.$f['foto'].'" alt="Foto user" style="width:250px; height:250px; border-radius:50%; margin-left: 30px; margin-top: 15px;"">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-family: Poiret One, cursive;"><strong>nombre: '.$f['Nombre'].'</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-family: Poiret One, cursive;"><strong>Apellido: '.$f['Apellido'].'</strong></h3>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-family: Poiret One, cursive;"><strong>Email: '.$f['Email'].'</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-family: Poiret One, cursive;"><strong>telefono: '.$f['Telefono'].'</strong></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-family: Poiret One, cursive;"><strong>rol: '.$f['Rol'].'</strong></h3> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </section>';
        }
    }
}
// session_start();
function perfilUsuario(){

    // VARIABLE DE SESION DE LOGIN



    $id = $_SESSION['id'];
    $objConsulta = new consultaS();
    $result = $objConsulta->verPerfilEmprendedor($id);

    foreach ($result as $f) {
        echo '
        

        <li class="label">'.$f['Rol'].'</li>
                    <li>
                        <a  href="emprendedor.php">
                        <img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"> '.$f['Nombre'].'
                            
                        </a>
                    </li>
                    <li>
                        <a  href="emprendedor.php">
                            
                        </a>
                    </li>
                    <li>
                        <a href="../../controller/cerrarSesion.php">
                            <i class="ti-close"></i> Salir</a>
        

                    
        
        ';;
    }




}

function perfilEditarEmprendedor(){
    $id=$_GET['id'];

    $objConsulta = new consultas();
    $result = $objConsulta->verPerfilUsuario($id);

    foreach ($result as $f){
        
        echo'
        
        <div class="row">
        <div class="col-lg-3">
        <div class="card perfil-user modificar-user">
          <img src="../'.$f['foto'].'" alt="Foto perfil">
          <h3 class="text-center pt-5 pb-1">'.$f['Nombre'].' '.$f['Apellido'].'</h3>
          <h4 class="text-center pb-4">'.$f['Rol'].'</h4>
        </div>
      </div>
      <div class="col-lg-9 botones-activos">
        <div class="card modificar-user">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">Perfil</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Cambiar foto</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Cambiar clave</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">


            <div class="p-5 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form action="../../controller/modificarEmprendedor.php" method="POST" enctype="multipart/form-data">
                <div class="row formulario">
                  <div class="form-group col-lg-6">
                    <label>Identificacion</label>
                    <input readonly type="number" class="form-control" placeholder="Ej:10000004436" requiredname="identificacion" value="'.$f['ID'].'">
                  </div>


                  <div class="form-group col-lg-6">
                    <label>Nombres</label>
                    <input type="text" class="form-control" placeholder="Ej:Diana" required name="nombre" value="'.$f['Nombre'].'">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" placeholder="Ej:Ramírez" required name="apellidos" value="'.$f['Apellido'].'">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Correo</label>
                    <input type="email" class="form-control" placeholder="Ej:Diana@gmail.com" required name="email" value="'.$f['Email'].'">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>teléfono</label>
                    <input type="number" class="form-control" placeholder="Ej:3154942891" required name="telefono" value="'.$f['Telefono'].'">
                  </div>
                  
                    <p>&nbsp;</p>
                    <p><input type="hidden" name = "id_producto" value="'.$id.'"></p>
    
                </div>
                <button type="submit" class="btn btn-main-sm btn-flat m-b-30 m-t-30 w-100">Actualizar datos</button>

              </form>
            </div>


            <div class="p-5 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="../../controller/modificarFotoEmprendedor.php" method="POST" enctype="multipart/form-data">
                <div class="row formulario">
                <div class="form-group col-lg-6">
                 <label>Identificacion</label>
                  <input readonly type="number" class="form-control" placeholder="Ej:10000004436" required name="identificacion" value="'.$id.'">
                 </div>
                 <div class="form-group col-lg-6">
                    <label>Foto de Usuario:</label>
                    <input type="file" class="form-control" required name="foto" accept=".jpeg, .jpg, .png, .gif">
                 </div>
                </div>
                <button type="submit" class="btn btn-main-sm btn-flat m-b-30 m-t-30 w-100">Actualizar foto</button>

              </form>
            </div>


            <div class="p-5 tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <form action="../../controller/modificarClaveEmprendedor.php" method="POST" enctype="multipart/form-data">
                <div class="row formulario">
                <div class="form-group col-lg-6">
                 <label>Identificacion</label>
                 <input readonly type="number" class="form-control" placeholder="Ej:10000004436" required name="identificacion" value="'.$f['ID'].'">
                </div>
                  <div class="form-group col-lg-12">
                    <label>Nueva clave</label>
                    <input type="password" class="form-control" placeholder="Ej:**********" required name="clave">
                  </div>
                  <div class="form-group col-lg-12">
                    <label>Confirmar clave</label>
                    <input type="password" class="form-control" placeholder="Ej:**********" required name="clave2">
                  </div>
                </div>
                <button type="submit" class="btn btn-main-sm btn-flat m-b-30 m-t-30 w-100">Actualizar Clave</button>

              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
        ';
    }
}

function cerrarSesionPopup2()
{

    //El session_start no debe estar en 2 models
    //session_start();
    //Variable de sesión del login
    $id = $_SESSION['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->VerPerfilUsuario($id);

    foreach ($result as $f) {
        echo '
            <header>
                <div class="container" >
                    <div class="row" >
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light navigation">
                        <a class="navbar-brand" href="home.php">
                            <img src="../../theme/images/Mi proyecto.png" alt="Logo TTM" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav">
                            <h2>Administración de tu cuenta</h2>
                            </ul>
                            <ul class="navbar-nav ml-auto mt-10">
                            <li class="nav-item">
                                <a class="btn btn-light" href="emprendedor2.php?id='.$f['ID'].'">Editar Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-light" href="../../controller/cerrarSesion.php" ../../controller/cerrarSesion.php>Cerrar sesion</a>
                            </li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                    </div>
                </div>
            </header>
            <div id="popup" style="padding:50px">
                <div class="popup-cont ">
                     <h3>Informacion de tu cuenta</h3>
                    <p>¡Hola ' . $f['Nombre'] . '! <br>
                    Esta sección está diseñada para visualizar la información de tu perfil, que incluye tus datos personales y proporciona una visión general de la actividad de tu cuenta en general.</p>
                    
                </div>
            </div>    
            ';
    }
}   

function buscar_usuario($nombre){
    $objConsulta = new Consultas();
    $result = $objConsulta->buscarUsuario($nombre);


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['Nombre'].'</td>
                <td>'.$f['Apellido'].'</td>
                <td>'.$f['Rol'].'</td>
                <td>'.$f['Estado'].'</td>
                <td>
                    <a href="../views/administrador/modificar.php" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUserAdmin.php?id='.$f['ID'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
    }
}


?>