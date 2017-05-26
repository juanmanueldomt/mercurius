<html>
    <head>
        <title>Noti-UPIICSA</title>
        <meta charset="utf-8">
    <!-- BOOTSTRAP -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="resources/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- JQUERY -->
        <script src="resources/jquery/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
        <script src="resources/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="resources/bootstrap-3.3.5-dist/css/bootstrap-theme-mercurius.css">
    <!-- FIN-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <body>

      <?php
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
      if(isset($_SESSION['user'])){
      include('db.php');
      $sql = "SELECT INSERT_NOTICIA( '{$_POST['titulo']}','{$_POST['autor']}','{$_POST['cabecera']}', '{$_POST['portada']}' ,'".date('Y-m-d H:i:s')."','{$_POST['text']}')";
      $data=$con->query($sql);

      if($data!=null && $data->num_rows>0){
        $row = $data->fetch_array(MYSQLI_NUM);

        foreach ($_POST['Etiqueta'] as $label) {
          $sql = "INSERT INTO ETIQUETA SET ID_NOTICIA =".$row[0].", ETIQUETA ='".$label."'";
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
    </body>
