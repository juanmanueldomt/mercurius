<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(isset($_SESSION['user'])){
include('db.php');
$sql = "SELECT AVISO( '{$_POST['URL']}')";
$data=$con->query($sql);

if($data!=null && $data->num_rows>0){
  $row = $data->fetch_array(MYSQLI_NUM);

  foreach ($_POST['Aviso'] as $label) {
    $sql = "INSERT INTO AVISO SET URL=".$row[URL]"";
    $con->query($sql);
          }

    $_SESSION['msgtype']="success";
    $_SESSION['msg']="<strong>Perfecto</strong> Se ha agregado una nueva entrada.";

} else {
  $_SESSION['msgtype']="danger";
  $_SESSION['msg']="<strong>Error</strong> ".$sql."<br>".$con->error;
}
$con->close();
header("Location: index.php");
die();
}
else {
$_SESSION['msgtype']="danger";
$_SESSION['msg']="<strong>Error</strong> Hubo un error en la autenticacion, accede nuevamente porfavor.";
header("Location: index.php");
die();
}
?>
