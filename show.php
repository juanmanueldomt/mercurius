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
    <!-- NAVBAR
    ================================================== -->
    <?php
    include("header.php");
    echo'<!--================================================== -->';
    if(isset($_GET['article'])){
      include('db.php');
        $sql = "SELECT TITULO, AUTOR, FECHA, CONTENIDO FROM NOTICIA WHERE ID_NOTICIA='{$_GET['article']}'";
        $data = $con->query($sql);
        if($data!=null&& $data->num_rows>0)
        {
          $row = $data->fetch_array(MYSQLI_ASSOC);
        echo '<div class="articulo">
          <div class="page-header">
            <h1>'.$row['TITULO'].'<br><small>'.$row['AUTOR'].'</small></h1>
          </div>
          <div>'.$row['CONTENIDO'].'</div>
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
