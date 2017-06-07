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
  if(isset($_GET['aviso'])){
  include('db.php');
  $sql="SELECT * FROM AVISO WHERE ID_AVISO='{$_GET['aviso']}'";
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
    <div class="container">
      <div class="header-title">
        <h1><?php if(isset($row['ID_AVISO'])){ echo "ACTUALIZAR AVISO"; }else{echo "AGREGAR AVISO";} ?></h1>
      </div>
    </div>

    <form action="<?php if(isset($row['ID_AVISO'])){ echo "updateaviso.php"; }else{echo "addaviso.php";} ?>" method="post" id="editor" class="form-group">
      <?php if(isset($row['ID_AVISO'])){ echo '<input type="hidden" name="id_aviso" value="'.$row['ID_AVISO'].'">'; }?>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
        <input type="text" class="form-control" name="categoria" placeholder="Ingrese un Categoria" required value="<?php if(isset($row['CATEGORIA'])){ echo $row['CATEGORIA']; } ?>">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required value="<?php if(isset($row['AV_TITULO'])){ echo $row['AV_TITULO']; } ?>">
            </div>
        <br>
        <textarea name="contenido" id="editor-area" rows="15"><?php if(isset($row['AV_CONTENIDO'])){ echo stripslashes($row['AV_CONTENIDO']); } ?></textarea>
      <br>

    </form>

    <footer Align=center name="foot">
      <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
    </footer>



</body>
</html>
