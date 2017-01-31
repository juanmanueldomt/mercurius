<?php
echo '<style>
    /* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */
    .navbar-wrapper {
        position: absolute;
        top: 20px;
        left: 0;
        width: 100%;
        height: 51px;
    }
    .navbar-wrapper > .container {
        padding: 0;
    }

    @media all and (max-width: 768px ){
        .navbar-wrapper {
            position: relative;
            top: 0px;
        }
    }
</style>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost/mercurius">Noti-UPIICSA</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a>Inicio</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>

                        <li><a>Conocenos</a></li>
                        <li><a>Ayuda</a></li>

                    </ul>

             <ul class="nav navbar-nav navbar-right">';
             if (session_status() == PHP_SESSION_NONE) {
               session_start();
             }
             if(isset($_SESSION['user'])){
               echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" style="padding-right:10px"></span>'.$_SESSION['name'].'</a>
                    <ul class="dropdown-menu">
                      <li><a href="#"> Opciones</a></li>
                      <li><a href="logout.php">Cerrar Sesion</a></li>
                    </ul>
               </li>';
                  }
                  else {
                    echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                  }

echo'                </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
';
?>
