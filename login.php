<html>

<?php include("views/header.php"); ?>
<body>
    <?php
    include('views/navbar.php'); ?>
    <form action="access.php" method="POST">
    <div class="form-group form-login content">
        <label for="userfield">Usuario:</label>
        <input class="form-control input-sm" id="userfield" type="text" name="user" value="" required="">
        <br>
        <label for="passwordfield">Contraseña:</label>
        <input class="form-control input-sm" id="passwordfield" type="password" name="password" value="" placeholder="Contraseña" required="">
        <br>
        <input class="btn btn-default" type="submit" value="Ingresar">
    </div>
    </form>


  <script src="resources/bootstrap-3.3.5-dist/js/docs.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="resources/bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js"></script>

  <!-- jssor slider scripts-->
  <!-- use jssor.slider.debug.js for debug -->

  </body>
</html>