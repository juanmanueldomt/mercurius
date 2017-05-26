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
      include('header.php');
    ?>

    <form action="enviar.php" method="post" style="margin-top:80px;">

        <div style="width:83%;margin:auto;height:80%">
          <br>
        <div class="">
          <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required>
        </div>
        <div class="">
          <input type="text" class="form-control" name="autor" placeholder="Ingrese un Autor" required>
        </div>
        <div class="">
          <input type="text" class="form-control" name="cabecera" placeholder="Ingrese un Encabezado" required>
        </div>
        <div class="">
          <input type="text" class="form-control" name="portada" placeholder="Ingrese una Portada" required>
        </div>
          <br>
            <textarea name="text" id="editor-area" rows="8"> </textarea>
            <br>

            <div class="row">
              <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><input type="checkbox" name="Etiqueta[]" value="Administrativo"> Administrativo</span>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><input type="checkbox" name="Etiqueta[]" value="Direccion"> Direccion</span>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><input type="checkbox" name="Etiqueta[]" value="Academico"> Academico</span>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><input type="checkbox" name="Etiqueta[]" value="Cultural"> Cultural</span>                </div>
              </div>

              <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><input type="checkbox" name="Etiqueta[]" value="Deportivo"> Deportiva</span>
                </div>
              </div>

              <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon"><input type="checkbox" name="Etiqueta[]" value="Investigacion"> Investigacion</span>
                </div>
              </div>
            </div>
        </div>
    </form>

    <footer Align=center name="foot">
      <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
    </footer>



</body>
</html>
