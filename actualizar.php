<html>

    <body>

      <?php
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      if(isset($_SESSION['user'])){
      include('db.php');
      $Contenido=addslashes($_POST['text']);
      $sql = "UPDATE NOTICIA SET TITULO='{$_POST['titulo']}',AUTOR='{$_POST['autor']}',CARGO='{$_POST['cargo']}',CABECERA='{$_POST['cabecera']}',PORTADA= '{$_POST['portada']}',CONTENIDO='{$Contenido}' WHERE ID_NOTICIA='{$_POST['article']}'" ;
      $data=$con->query($sql);

      if($data!=null){
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
    </body>
