<html>

<?php include("views/header.php"); ?>
<body>
<?php
require_once __DIR__.'/common/user/user.php';
require_once __DIR__.'/common/database/dataBase.php';
require_once __DIR__.'/common/aviso/aviso.php';

  $usuario = session::currentUser();
  if(!$usuario->validateAdminPermission()){
    header("Location: index.php");
    die();
  }
  include('views/navbar.php');
  if(isset($_GET['aviso'])){
      $aviso=aviso::find($_GET['aviso']);
   if($aviso==null)
   {
       header("Location: index.php");
       die();
   }
}
?>
    <div class="container">
      <div class="header-title">
        <h1><?php if(isset($aviso)){ echo "ACTUALIZAR AVISO"; }else{echo "AGREGAR AVISO";} ?></h1>
      </div>
    </div>

    <form action="<?php if(isset($aviso)){ echo "updateaviso.php"; }else{echo "addaviso.php";} ?>" method="post" id="editor" class="form-group">
      <?php if(isset($aviso)){ echo '<input type="hidden" name="id_aviso" value="'.$aviso->getId().'">'; }?>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
        <input type="text" class="form-control" name="categoria" placeholder="Ingrese un Categoria" required value="<?php if(isset($aviso)){ echo $aviso->getCategoria(); } ?>">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="titulo" placeholder="Ingrese un Titulo" required value="<?php if(isset($aviso)){ echo $aviso->getTitulo(); } ?>">
            </div>
        <br>
        <textarea name="contenido" id="editor-area" rows="15"><?php if(isset($aviso)){ echo stripslashes($aviso->getContenido()); } ?></textarea>
      <br>

    </form>

    <footer Align=center name="foot">
      <p>©UPIICSA IPN 2016. · <a href="#">Privacy</a> · </p>
    </footer>



</body>
</html>
