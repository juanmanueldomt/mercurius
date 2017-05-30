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
    <div class="page-header">
      <h1>Editor <small></small></h1>
    </div>
    <form action="enviar.php" method="post" id="editor" class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="autor" placeholder="Ingrese un Autor" required>
        <input type="text" class="form-control" name="cargo" placeholder="Ingrese un Cargo">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
        <input  type="text" class="form-control" name="cabecera" placeholder="Ingree texto de cabecera" required>
        <input  type="text" class="form-control" name="portada" placeholder="Ingrese una direccion de Portada" required>
      </div>
      <br>
        <textarea name="text" id="editor-area" rows="8"> </textarea>
      <br>
      <div class="checkbox">
        <label class="checkbox-inline"><input type="checkbox" name="Etiqueta[]" value="Administrativo"> Administrativo</label>
        <label class="checkbox-inline"><input type="checkbox" name="Etiqueta[]" value="Direccion"> Direccion</label>
        <label class="checkbox-inline"><input type="checkbox" name="Etiqueta[]" value="Academico"> Academico</label>
        <label class="checkbox-inline"><input type="checkbox" name="Etiqueta[]" value="Cultural"> Cultural</label>
        <label class="checkbox-inline"><input type="checkbox" name="Etiqueta[]" value="Deportivo"> Deportiva</label>
        <label class="checkbox-inline"><input type="checkbox" name="Etiqueta[]" value="Investigacion"> Investigacion</label>
      </div>
    </form>

    <footer Align=center name="foot">
      <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
    </footer>



</body>
</html>
