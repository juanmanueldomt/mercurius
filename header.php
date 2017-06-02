<?php
echo '<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Noti-UPIICSA</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?tag=Administrativo">Administrativo</a></li>
                                <li><a href="index.php?tag=Direccion">Direccion</a></li>
                                <li><a href="index.php?tag=Academico">Academico</a></li>
                                <li><a href="index.php?tag=Cultural">Cultural</a></li>
                                <li><a href="index.php?tag=Deportivo">Deportivo</a></li>
                                <li><a href="index.php?tag=Administrativo">Salud</a></li>
                                <li><a href="index.php?tag=Administrativo">Investigacion</a></li>
                            </ul>
                        </li>
                        <li><a href="conocenos.php">Conocenos</a></li>
                        <li><a href="ayuda.php">Ayuda</a></li>
                    </ul>

             <ul class="nav navbar-nav navbar-right">';
             if (session_status() == PHP_SESSION_NONE) {
               session_start();
             }
             if(isset($_SESSION['user'])){
               echo '<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                          <span class="glyphicon glyphicon-user" style="padding-right:10px"></span><span id="namecontainer">'.$_SESSION['name'].'</span>
                          </a>
                        <ul class="dropdown-menu">';
                      if($_SESSION['rol']=="EDITOR"||$_SESSION['rol']=="ADMINISTRADOR"){
                      echo '<li><a href="editor.php">Nuevo Articulo</a></li>';
                    }
                    if($_SESSION['rol']=="ADMINISTRADOR"){
                    echo '<li><a href="admin.php">Administrador de Avisos</a></li>';
                  }
                      echo '<li><a href="configuration.php">Opciones</a></li>
                        <li><a href="logout.php">Cerrar Sesion</a></li>
                    </ul>
               </li>';
                  }
                  else {
                    echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>Registrar</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Ingresar</a></li>';
                  }

echo'                </ul>
                </div>
            </div>
        </nav>';

  if(isset($_SESSION['msgtype']))
        if($_SESSION['msgtype']!=null){
        echo '<div class="alert alert-'.$_SESSION['msgtype'].'" style="margin-bottom:0px">'.$_SESSION['msg'].'</div>';
        unset($_SESSION['msgtype']);
        unset($_SESSION['msg']);
        }

?>
