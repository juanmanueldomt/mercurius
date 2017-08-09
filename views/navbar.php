<?php
require_once __DIR__ . '/../common/user/user.php';
require_once __DIR__.'/../common/session/session.php';
$usuario = session::currentUser();
?>

<nav class="navbar navbar-dark green navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="navheader"></span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav mr-auto">
                <li class="dropdown nav-item">
                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
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
                <li><a class="nav-link" href="conocenos.php">Conocenos</a></li>
                <li><a class="nav-link" href="ayuda.php">Ayuda</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php

                if (isset($usuario)) {
                    echo '<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" class="nav-link">
                        <span class="glyphicon glyphicon-user nav-link" style="padding-right:10px"></span><span id="namecontainer" class="nav-link">' . $usuario->getNombre() . '</span>
                    </a>
                    <ul class="dropdown-menu">';
                    echo '<li><a>'.$usuario->getRoll().'</a>    </li>';
                    if($usuario->validateEditPermission($usuario)){
                        echo '<li><a href="editor.php">Nuevo Articulo</a></li>';
                    }
                    if($usuario->validateAdminPermission($usuario))
                    {
                        echo '<li><a href="admin.php">Administrador de Avisos</a></li>';
                        echo '<li><a href="admons.php">Administrador de Noticias</a></li>';
                        echo '<li><a href="logout.php">Cerrar Sesion</a></li>';
                    }
                    echo '</ul>';

                } else {
                    echo '</li>
                 <li><a class="nav-link" href="register.php"><span class="glyphicon glyphicon-user"></span>Registrar</a></li>
                 <li><a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Ingresar</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<?php include("message.php") ?>
