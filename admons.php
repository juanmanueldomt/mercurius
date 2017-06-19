<html>

<?php include("header.php"); ?>

<body>

<?php
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(!isset($_SESSION['user'])||!($_SESSION['rol']=="ADMINISTRADOR")){
  header("Location: index.php");
  die();
}
include("navbar.php");
include("db.php");

 $sql = "SELECT * FROM NOTICIA WHERE AUTORIZACION = 'RECIBIDO' ORDER BY FECHA  DESC";

 $cont=0;
 $data = $con->query($sql);

 if($data!=null && $data->num_rows>0){
   echo' <div class="container">
          <table class="table">
          <thead>
          <tr>
            <th>Articulo</th>
            <th>Autor</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
          </thead>';

   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
     echo'<tr>
            <td>'.$row['TITULO'].'</td>
            <td>'.$row['AUTOR'].'</td>
            <td>'.$row['AUTORIZACION'].'</td>
              <td><p>
              <a href="chngstate.php?action=autorizar&id='.$row['ID_NOTICIA'].'"><span class="glyphicon glyphicon-ok"></a>
              <a href="chngstate.php?action=delete&id='.$row['ID_NOTICIA'].'"><span class="glyphicon glyphicon-trash"></a>
              <a href="chngstate.php?action=edit&id='.$row['ID_NOTICIA'].'"><span class="glyphicon glyphicon-edit"></a></p>
              </td>
          </tr>';
   }
   echo "</table>";
    echo' </div>';
 }


?>
