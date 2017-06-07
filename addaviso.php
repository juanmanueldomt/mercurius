<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(isset($_SESSION['user'])){
include('db.php');
$sql = "INSERT INTO AVISO(CATEGORIA,AV_TITULO,AV_CONTENIDO) VALUES ('{$_POST['categoria']}','{$_POST['titulo']}','{$_POST['contenido']}')" ;
$data=$con->query($sql);

if($data!=null ){
    $_SESSION['msgtype']="success";
    $_SESSION['msg']="<strong>Perfecto</strong> Se ha agregado una nueva entrada.";

} else {
  $_SESSION['msgtype']="danger";
  $_SESSION['msg']="<strong>Error</strong> ".$sql."<br>".$con->error;
}
$con->close();
header("Location: admin.php");
die();
}
else {
$_SESSION['msgtype']="danger";
$_SESSION['msg']="<strong>Error</strong> Hubo un error en la autenticacion, accede nuevamente porfavor.";
header("Location: index.php");
die();
}
?>
