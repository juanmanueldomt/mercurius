<html>

<?php include("views/header.php"); ?>

<body>

<?php
require_once __DIR__ . '/common/user/user.php';
require_once __DIR__ . '/common/session/session.php';
require_once __DIR__ . "/common/database/dataBase.php";

$user = session::currentUser();
if ($user != null) {
    if (!$user->validateEditPermission() && !$user->validateAdminPermission()) {
        header("Location: index.php");
        die();
    }
} else {
    header("Location: login.php");
    die();
}
include("views/navbar.php");

$db = new dataBase();
$con = $db->getConection();

$sql = "SELECT * FROM NOTICIA WHERE AUTORIZACION = 'RECIBIDO' ORDER BY FECHA  DESC";

$cont = 0;
$data = $con->query($sql);
echo ' <div class="container">';

if ($data != null && $data->num_rows > 0) {
    echo ' <h2 > Pendientes </h2>';
    echo '
          <table class="table">
          <thead>
          <tr>
            <th class="col-md-5">Articulo</th>
            <th class="col-md-3">Autor</th>
            <th class="col-md-2">Estado</th>
            <th class="col-md-2">Acciones</th>
          </tr>
          </thead>';

    while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>
            <td>' . $row['TITULO'] . '</td>
            <td>' . $row['AUTOR'] . '</td>
            <td>' . $row['AUTORIZACION'] . '</td>
              <td><div class="row"><p>
              <a class="col-md-4" href="chngstate.php?action=autorizar&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-ok"></a>
              <a class="col-md-4" href="chngstate.php?action=delete&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-trash"></a>
              <a class="col-md-4" href="chngstate.php?action=edit&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-edit"></a></p>
              </div></td>
          </tr>';


    }
    echo "</table>";
}

$sql = "SELECT * FROM NOTICIA WHERE AUTORIZACION = 'AUTORIZADO' ORDER BY FECHA  DESC LIMIT 5";

$cont = 0;
$datat = $con->query($sql);


if ($datat != null && $datat->num_rows > 0) {
    echo ' <h2> Agregados recientemente </h2>';
    echo '<table class="table">
          <thead>
          <tr>
          <th class="col-md-5">Articulo</th>
          <th class="col-md-3">Autor</th>
          <th class="col-md-2">Estado</th>
          <th class="col-md-2">Acciones</th>
          </tr>
          </thead>';

    while ($row = $datat->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>
            <td>' . $row['TITULO'] . '</td>
            <td>' . $row['AUTOR'] . '</td>
            <td>' . $row['AUTORIZACION'] . '</td>
              <td><div class="row"><p>
              <a class="col-md-4" href="chngstate.php?action=deauth&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-remove"></a>
              <a class="col-md-4" href="chngstate.php?action=delete&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-trash"></a>
              <a class="col-md-4" href="chngstate.php?action=edit&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-edit"></a></p>
              </div></td>
          </tr>';

    }
    echo "</table>";

}

$sql = "SELECT * FROM NOTICIA WHERE AUTORIZACION = 'EDIT' ORDER BY FECHA  DESC LIMIT 5";

$cont = 0;
$data = $con->query($sql);


if ($data != null && $data->num_rows > 0) {
    echo ' <h2>Remitidos a Edicion</h2>';
    echo '<table class="table">
         <thead>
         <tr>
         <th class="col-md-5">Articulo</th>
         <th class="col-md-3">Autor</th>
         <th class="col-md-2">Estado</th>
         <th class="col-md-2">Acciones</th>
         </tr>
         </thead>';

    while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>
           <td>' . $row['TITULO'] . '</td>
           <td>' . $row['AUTOR'] . '</td>
           <td>' . $row['AUTORIZACION'] . '</td>
             <td><div class="row"><p>
             <a class="col-md-4" href="chngstate.php?action=deauth&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-remove"></a>
             <a class="col-md-4" href="chngstate.php?action=delete&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-trash"></a>
             <a class="col-md-4" href="chngstate.php?action=edit&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-edit"></a></p>
             </div></td>
         </tr>';

    }
    echo "</table>";

}


$sql = "SELECT * FROM NOTICIA WHERE AUTORIZACION = 'DELETE' ORDER BY FECHA  DESC LIMIT 3";

$cont = 0;
$data = $con->query($sql);

if ($data != null && $data->num_rows > 0) {
    echo ' <h2> Borrados Recientes </h2>';
    echo '<table class="table">
       <thead>
       <tr>
       <th class="col-md-5">Articulo</th>
       <th class="col-md-3">Autor</th>
       <th class="col-md-2">Estado</th>
       <th class="col-md-2">Acciones</th>
       </tr>
       </thead>';

    while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>
         <td>' . $row['TITULO'] . '</td>
         <td>' . $row['AUTOR'] . '</td>
         <td>' . $row['AUTORIZACION'] . '</td>
           <td><div class="row"><p>
           <a class="col-md-4" href="chngstate.php?action=autorizar&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-remove"></a>
           <a class="col-md-4" href="chngstate.php?action=delete&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-trash"></a>
           <a class="col-md-4" href="chngstate.php?action=edit&id=' . $row['ID_NOTICIA'] . '"><span class="glyphicon glyphicon-edit"></a></p>
           </div></td>
       </tr>';

    }
    echo "</table>";

}
echo ' </div>';
?>
