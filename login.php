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
    <!-- FIN-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script type="text/javascript" src=' resources/tinymce/js/tinymce/tinymce.min.js'></script>
        <script type="text/javascript">tinymce.init({  selector: "#editor-area",plugins: "textcolor,colorpicker,save,hr,image,imagetools,wordcount",toolbar:"save | undo redo | styleselect forecolor | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code'",wordcount_cleanregex: /[0-9.(),;:!?%#$?\x27\x22_+=\\\/\-]*/g});</script>

        <link rel="stylesheet" href="resources/bootstrap-3.3.5-dist/css/bootstrap-theme-mercurius.css">
</head>
<body>
  <?php
  //include('header.php');
  $formlg = '<form action="login.php" method="POST">
  <div class="form-group form-login content">
    <label for="userfield">Usuario:</label>
    <input class="form-control input-sm" id="userfield" type="text" name="user" value="" required="">
    <br>
    <label for="passwordfield">Contraseña:</label>
    <input class="form-control input-sm" id="passwordfield" type="password" name="password" value="" placeholder="Contraseña" required="">
    <br>
    <input class="btn btn-default" type="submit" value="Ingresar">
  </div>
  </form>';

  if(isset($_POST['user'])&&isset($_POST['password'])){
    include('db.php');
      $sql = "SELECT ID_USUARIO, NOMBRE, APELLIDOS, ROL, EMAIL FROM USUARIO WHERE EMAIL='{$_POST['user']}' && PASSWORD='{$_POST['password']}'";
      $data = $con->query($sql);
      if($data!=null&& $data->num_rows>0)
      {
        $row = $data->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['user']=$row['ID_USUARIO'];
        $_SESSION['name']=$row['NOMBRE'];
        include('index.php');
      }
      else {
        include('header.php');
        echo $formlg.'<p forecolor="red"> <center> Usuario no encontrado </center></p>';
      }
    }
      else {
        include('header.php');
        echo $formlg;
      }
  ?>
  </body>
