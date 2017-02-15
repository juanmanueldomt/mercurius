<?php
if(isset($_POST['name'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['password'])){
  include('db.php');
    $sql = "INSERT INTO USUARIO (NOMBRE, APELLIDOS, ROL, EMAIL,PASSWORD) VALUES ('{$_POST['name']}','{$_POST['lastname']}','USUARIO','{$_POST['email']}','{$_POST['password']}')" ;
    if ($con->query($sql) === TRUE) {
      session_start();
      $_SESSION['msgtype']="success";
      $_SESSION['msg']="<strong>Perfecto</strong> Revisa tu correo para confirmar tu cuenta";
      header("Location: login.php");
      die();
    } else {
      session_start();
      $_SESSION['msgtype']="danger";
      $_SESSION['msg']="<strong>ERROR</strong>". $sql . "<br>" . $con->error;
      header("Location: register.php");
    }
  }
    else {
      session_start();
      $_SESSION['msgtype']="danger";
      $_SESSION['msg']="<strong>Ohhh Ohhh! </strong> Algo salio mal!";
      header("Location: register.php");
      die();
    }
?>
