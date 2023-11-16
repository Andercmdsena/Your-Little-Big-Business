<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php
function cargarUsuarioAdmin(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUserAdmin();


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
          $estado = ($f['estado'] == 1) ? 'Activo' : (($f['estado'] == 0) ? 'Bloqueado' : 'Pendiente');
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['Nombres'].'</td>
                <td>'.$f['Apellidos'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$estado.'</td>
                <td>
                <a href="../../views/administrador/modificarAdmin.php?id='.$f['Identificacion'].'" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUserAdmin.php?id='.$f['Identificacion'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
        
    }
}
function cargarUsuarioAdminReportes(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUserAdmin();


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
          $estado = ($f['estado'] == 1) ? 'Activo' : (($f['estado'] == 0) ? 'Bloqueado' : 'Pendiente');
        echo  '
            <tr>
                
                <td>'.$f['Nombres'].'</td>
                <td>'.$f['Apellidos'].'</td>
                <td>'.$f['Email'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$estado.'</td>
            <tr>';
        }
        
    }
}


// session_start();    
function perfilAdmin(){

    // VARIABLE DE SESION DE LOGIN



    $id = $_SESSION['id'];

    $objConsulta = new consultas();
    $result = $objConsulta->verPerfilAdmin($id);

    foreach ($result as $f) {
        echo '
        
        <li class="label">'.$f['rol'].'</li>
                    <li>
                        <a  href="home.php">
                        <img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"> '.$f['Nombres'].'
                            
                        </a>
                    </li>
        ';
    }

}



function perfilEditarAdmin(){
    $id=$_GET['id'];

    $objConsulta = new consultas();
    $result = $objConsulta->verPerfilAdmin($id);

    foreach ($result as $f){
        
        echo'
        
        <div class="row">
        <div class="col-lg-3">
        <div class="card perfil-user modificar-user">
          <img src="../'.$f['foto'].'" alt="Foto perfil">
          <h3 class="text-center pt-5 pb-1">'.$f['Nombres'].' '.$f['Apellidos'].'</h3>
          <h4 class="text-center pb-4 adm">'.$f['rol'].'</h4>
        </div>
      </div>
      <div class="col-lg-9 botones-activos">
        <div class="card modificar-user">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="home-tab" data-toggle="tab" data-target="#home"
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
              <form action="../../controller/modificarUsuarioAdmin.php" method="POST" enctype="multipart/form-data">
                <div class="row formulario">
                  <div class="form-group col-lg-6">
                    <label>Identificacion</label>
                    <input readonly type="number" class="form-control" placeholder="Ej:10000004436" requiredname="identificacion" value="'.$f['Identificacion'].'">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Tipo de Identificacion</label>
                    <select required name="dato" id="" class="form-control">
                      <option value="'.$f['Tipo_de_dato'].'">'.$f['Tipo_de_dato'].'</option>
                      <option value="CC">CC</option>
                      <option value="CE">CE</option>
                      <option value="PASAPORTE">PASAPORTE</option>
                    </select>
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Nombres</label>
                    <input type="text" class="form-control" placeholder="Ej:Diana" required name="nombre" value="'.$f['Nombres'].'">
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" placeholder="Ej:Ramírez" required name="apellidos" value="'.$f['Apellidos'].'">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Correo</label>
                    <input type="email" class="form-control" placeholder="Ej:Diana@gmail.com" required name="email" value="'.$f['Email'].'">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>teléfono</label>
                    <input type="number" class="form-control" placeholder="Ej:3154942891" required name="telefono" value="'.$f['telefono'].'">
                  </div>
                  
                    <p>&nbsp;</p>
                    <p><input type="hidden" name = "id_producto" value="'.$id.'"></p>
    
                </div>
                <button type="submit" class="btn btn-main-sm btn-flat m-b-30 m-t-30 w-100">Actualizar datos</button>

              </form>
            </div>


            <div class="p-5 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="../../controller/modificarFotoAdmin.php" method="POST" enctype="multipart/form-data">
                <div class="row formulario">
                <div class="form-group col-lg-6">
                 <label>Identificacion</label>
                  <input readonly type="number" class="form-control" placeholder="Ej:10000004436" required name="identificacion" value="'.$f['Identificacion'].'">
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
            <form action="../../controller/modificarClaveAdmin.php" method="POST" enctype="multipart/form-data">
                <div class="row formulario">
                <div class="form-group col-lg-6">
                 <label>Identificacion</label>
                 <input readonly type="number" class="form-control" placeholder="Ej:10000004436" required name="identificacion" value="'.$f['Identificacion'].'">
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

function cerrarSesionPopup()
{

    //El session_start no debe estar en 2 models
    //session_start();
    //Variable de sesión del login
    $id = $_SESSION['id'];

    $objConsultas = new Consultas();
    $result = $objConsultas->VerPerfilAdmin($id);

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
                                <a class="btn btn-light" href="perfil.php?id='.$f['Identificacion'].'">Editar Perfil</a>
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
                    <p>¡Hola ' . $f['Nombres'] . '! <br>
                    Esta sección está diseñada para visualizar la información de tu perfil, que incluye tus datos personales y proporciona una visión general de la actividad de tu cuenta en general.</p>
                    
                </div>
            </div>    
            ';
    }
}

function buscar($nombre){
    $objConsulta = new Consultas();
    $result = $objConsulta->buscarUsuarioAdmin($nombre);


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['Nombres'].'</td>
                <td>'.$f['Apellidos'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$f['estado'].'</td>
                <td>
                    <a href="" class="btn btn-primary"><i class="ti-marker-alt"></i></a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUserAdmin.php?id='.$f['Identificacion'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
    }
}


?>