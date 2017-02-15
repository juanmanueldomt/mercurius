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
include('header.php');
?>
<div class="register">
<form action="newuser.php" method="POST">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="name" type="text" class="form-control" name="name" placeholder="Nombre(s)" required>
    <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Apellidos" required>
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
    <input id="password" type="text" class="form-control" name="email" placeholder="Correo Electronico" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
    <input id="password" type="password" class="form-control" name="rptpassword" placeholder="Repita Password" required>
  </div>
  <br><br>
  <center>
  <input class="btn btn-default" type="submit" value="Enviar">
  </center
</form>
</div>
</body>
