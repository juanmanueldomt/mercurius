<html>

<?php include("header.php"); ?>
<body>
<?php
  if(session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if(!isset($_SESSION['user'])||!($_SESSION['rol']=="EDITOR"||$_SESSION['rol']=="ADMINISTRADOR")){
    header("Location: index.php");
    die();
  }
  include('navbar.php');
  $row="";
  if(isset($_GET['article'])){
  include('db.php');
  $sql="SELECT * FROM NOTICIA WHERE ID_NOTICIA='{$_GET['article']}'";
  $data=$con->query($sql);
  if($data!=null&& $data->num_rows>0)
  {
    $row = $data->fetch_array(MYSQLI_ASSOC);
  }
  else {
    header("Location: index.php");
    die();
  }
}
?>
    <div class="header-title">
      <h1>Editor</h1>
    </div>
    <form action="<?php if(isset($row['ID_NOTICIA'])){ echo "actualizar.php"; }else{echo "enviar.php";} ?>" method="post" id="editor" class="form-group">
      <?php if(isset($row['ID_NOTICIA'])){ echo '<input type="hidden" name="article" value="'.$row['ID_NOTICIA'].'">'; }?>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required value="<?php if(isset($row['TITULO'])){ echo $row['TITULO']; } ?>">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="autor" placeholder="Ingrese un Autor" required value="<?php if(isset($row['AUTOR'])){ echo $row['AUTOR']; } ?>">
        <input type="text" class="form-control" name="cargo" placeholder="Ingrese un Cargo" value="<?php if(isset($row['CARGO'])){ echo $row['CARGO']; } ?>">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
        <input  type="text" class="form-control" name="cabecera" placeholder="Ingrese texto de cabecera" value="<?php if(isset($row['CABECERA'])){ echo $row['CABECERA']; } ?>" required >
        <input  type="text" class="form-control" name="portada" placeholder="Ingrese una direccion de Portada" required value="<?php if(isset($row['PORTADA'])){ echo $row['PORTADA']; } ?>">
      </div>
      <br>
        <textarea name="text" id="editor-area" rows="15"><?php if(isset($row['CONTENIDO'])){ echo stripslashes($row['CONTENIDO']); } ?></textarea>
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
