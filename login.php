<html>

<?php include("header.php"); ?>
<body>

  <?php

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
        $_SESSION['rol']=$row['ROL'];
        $_SESSION['msgtype']="success";
        $_SESSION['msg']="<strong>Bienvenido</strong> a tu pagina de noticias";
        header("Location: index.php");
        die();
      }
      else {

        session_start();
        $_SESSION['msgtype']="danger";
        $_SESSION['msg']="<strong>Error</strong> Los valores ingresados no son validos";
        header("Location: login.php");
        die();
      }
    }
      else {
        include('navbar.php');
        echo $formlg;
      }

  ?>
  <script src="resources/bootstrap-3.3.5-dist/js/docs.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="resources/bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js"></script>

  <!-- jssor slider scripts-->
  <!-- use jssor.slider.debug.js for debug -->

  </body>
