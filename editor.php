<?php include("views/header.php"); ?>
<body>
<?php
require_once __DIR__.'/common/user/user.php';
require_once __DIR__.'/common/session/session.php';
require_once __DIR__.'/common/articulo/articulo.php';

  include('views/navbar.php');
  $row="";
  $articulo = articulo::find(intval($_GET['article']));
?>
    <div class="header-title">
      <h1>Editor</h1>
    </div>
    <form action="<?php if($articulo!=null){ echo "actualizar.php"; }else{echo "enviar.php";} ?>" method="post" id="editor" class="form-group">
      <?php if($articulo!=null){ echo '<input type="hidden" name="article" value="'.$articulo->getId().'">'; }?>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required value="<?php if($articulo!=null){ echo $articulo->getTitulo(); } ?>">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="autor" placeholder="Ingrese un Autor" required value="<?php if($articulo!=null){ echo $articulo->getAutor(); } ?>">
        <input type="text" class="form-control" name="cargo" placeholder="Ingrese un Cargo" value="<?php if($articulo!=null){ echo $articulo->getCargo(); } ?>">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
        <input  type="text" class="form-control" name="cabecera" placeholder="Ingrese texto de cabecera" value="<?php if($articulo!=null){ echo $articulo->getCabecera(); } ?>" required >
        <input  type="text" class="form-control" name="portada" placeholder="Ingrese una direccion de Portada" required value="<?php if($articulo!=null){ echo $articulo->getPortada(); } ?>">
      </div>
      <br>
        <textarea name="text" id="editor-area" rows="15"><?php if($articulo!=null){ echo stripslashes($articulo->getContenido()); } ?></textarea>
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
