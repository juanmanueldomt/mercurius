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
        $sql = "SELECT TITULO, AUTOR, CARGO, FECHA, CONTENIDO, PORTADA FROM NOTICIA WHERE ID_NOTICIA='{$_GET['article']}'";
        $data = $con->query($sql);
        if($data!=null&& $data->num_rows>0)
        {
          $row = $data->fetch_array(MYSQLI_ASSOC);
        echo '<div class="articulo">
          <div class="page-header">
          <img class="img-header" src="'.$row['PORTADA'].'">
            <h1 class="titulo-header">'.$row['TITULO'].'</h1>
              <div class="generales-header">
                <h3>'.$row['AUTOR'].'</h3>
                <h3>'.$row['CARGO'].'</h3>
                <h3>'.$row['FECHA'].'</h3>
               </div>

          </div>
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
