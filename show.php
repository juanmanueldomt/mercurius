<html>

<?php include("header.php"); ?>
    <body>
    <!-- NAVBAR
    ================================================== -->
    <?php
    include("navbar.php");
    echo'<!--================================================== -->';
    if(isset($_GET['article'])){
      include('db.php');
        $sql = "SELECT TITULO, AUTOR, CARGO, FECHA, CONTENIDO, PORTADA FROM NOTICIA WHERE ID_NOTICIA='{$_GET['article']}' AND AUTORIZACION = 'AUTORIZADO'";
        $data = $con->query($sql);
        if($data!=null&& $data->num_rows>0)
        {
          $row = $data->fetch_array(MYSQLI_ASSOC);
        echo '
        <div class="container">
          <div class="jumbotron" style="background:-webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.1)), to(rgba(0, 0, 0, 1))),url('.$row['PORTADA'].') no-repeat;background-size:cover;">
            <h1>'.$row['TITULO'].'</h1>
            <p>'.$row['AUTOR'].'</p>
            <p>'.$row['CARGO'].'</p>
            <p>'.$row['FECHA'].'</p>
          </div>
        </div>
        <div class="generales-header">
        <h4>'.$row['AUTOR'].'</h4>
        <h4>'.$row['CARGO'].'</h4>
        <h4>'.$row['FECHA'].'</h4>
        </div>
        <div class="articulo">
          <div class="articulo-body">'.stripslashes($row['CONTENIDO']).'</div>
        </div>';
        }
      }

    ?>




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
