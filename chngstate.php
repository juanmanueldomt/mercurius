<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if(isset($_SESSION['user'])&&$_SESSION['rol']=="ADMINISTRADOR"){

  $action=$_GET['action'];
  $status="";

  include('db.php');

  switch ($action) {
    case "autorizar":
        $status="AUTORIZADO";
        break;
    case "delete":
        $status="DELETE";
        break;
    case "edit":
        $status="EDIT";
        break;
    case "deauth":
        $status="RECIBIDO";
        break;

}

    $sql="UPDATE NOTICIA SET AUTORIZACION='".$status."' WHERE ID_NOTICIA='".$_GET['id']."'";
  /*if($_GET['action']=="autorizar")
    $sql="UPDATE NOTICIA SET AUTORIZACION='AUTORIZADO' WHERE ID_NOTICIA='".$_GET['id']."'";
  else
    if($_GET['action']=="delete")
      $sql="UPDATE NOTICIA SET AUTORIZACION='DELETE' WHERE ID_NOTICIA='".$_GET['id']."'";
        else
          if($_GET ['action']=="edit")
            $sql="UPDATE NOTICIA SET AUTORIZACION='EDIT' WHERE ID_NOTICIA='".$_GET['id']."'";
*/

$data=$con->query($sql);
if($data!=null){
    $_SESSION['msgtype']="success";
    $_SESSION['msg']="<strong>Perfecto</strong> Se ha cambiad el estado del articulo";

} else {
  $_SESSION['msgtype']="danger";
  $_SESSION['msg']="<strong>Error</strong> ".$sql."<br>".$con->error;
}
$con->close();
header("Location: admons.php");
die();
}
else {
$_SESSION['msgtype']="danger";
$_SESSION['msg']="<strong>Error</strong> Hubo un error en la autenticacion, accede nuevamente porfavor.";
header("Location: index.php");
die();
}
?>
