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
    <div class="header-title">
      <h1>Editor</h1>
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
        <input  type="text" class="form-control" name="cabecera" placeholder="Ingrese texto de cabecera" required>
        <input  type="text" class="form-control" name="portada" placeholder="Ingrese una direccion de Portada" required>
      </div>
      <br>
        <textarea name="text" id="editor-area" rows="15"> </textarea>
      <br>
      <div class="checkbox container-fluid">
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_admon.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Administrativo"> Administrativo</label></div>
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_direc.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Direccion"> Direccion</label></div>
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_academico.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Academico"> Academico</label></div>
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_culture.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Cultural"> Cultural</label></div>
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_deportes.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Deportivo"> Deportiva</label></div>
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_salud1.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Salud"> Salud</label></div>
        <div class="col-sm-6"><img src="resources/iconos/ic_menu_invest.png" id="icon-editor">
          <label><input type="checkbox" name="Etiqueta[]" value="Investigacion"> Investigacion</label></div>
      </div>
    </form>

    <footer Align=center name="foot">
      <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
    </footer>



</body>
</html>
