<html>

<?php include("views/header.php"); ?>


    <body>
<?php
include('views/navbar.php');
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
