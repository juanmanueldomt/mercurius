<html>
<?php include("views/header.php");
require_once __DIR__."/common/articulo/articulo.php"; ?>
    <body>
    <!-- NAVBAR
    ================================================== -->
    <?php include("views/navbar.php") ?>

    <?php
    $articulo = new articulo($_GET['article']);
    ?>
        <div class="container">
          <div class="jumbotron" style="background:-webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.1)), to(rgba(0, 0, 0, 1))),url(<?php echo $articulo->getPortada(); ?>) no-repeat;background-size:cover;">
            <h1><?php echo $articulo->getTitulo(); ?></h1>
            <p><?php echo $articulo->getAutor(); ?></p>
            <p><?php echo $articulo->getCargo(); ?></p>
            <p><?php echo $articulo->getFecha(); ?></p>
          </div>
        </div>
        <div class="generales-header">
        <h4><?php echo $articulo->getAutor(); ?></h4>
        <h4><?php echo $articulo->getCargo(); ?></h4>
        <h4><?php echo $articulo->getFecha(); ?></h4>
        </div>
        <div class="articulo">
          <div class="articulo-body"><?php echo stripslashes($articulo->getContenido()); ?></div>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="resources/bootstrap-3.3.5-dist/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="resources/bootstrap-3.3.5-dist/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.slider.debug.js for debug -->
    <script type="text/javascript" src="resources/bootstrap-3.3.5-dist/js/jssor.slider.mini.js"></script>
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
        </footer>

</body>
</html>
