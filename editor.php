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


    <form action="enviar.php" method="POST" style="margin-top:80px;">

        <div style="width:83%;margin:auto;height:80%">
          <br>
          <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required>
          <br>
            <textarea name="text" id="editor-area" rows="19"> </textarea>
        </div>

    </form>

    <footer Align=center name="foot">
      <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
    </footer>



</body>
</html>
