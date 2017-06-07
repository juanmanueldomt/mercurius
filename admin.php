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
include("navbar.php");
include("db.php");

$sql="SELECT * FROM AVISOS";

 $sql = "SELECT * FROM AVISO ";
  $cont=0;
  $data = $con->query($sql);

  if($data!=null && $data->num_rows>0){
	  echo' <div id="contavi" class="container-fluid">';
		while( $row = $data->fetch_array(MYSQLI_ASSOC)){
			echo'<div class="col-sm-10 col-md-3 col-lg-3">
			       <div>
             <h1>'.$row['CATEGORIA'].'</h1>
             <h2>'.$row['AV_TITULO'].'</h2>
             <p>'.$row['AV_CONTENIDO'].'</p>
             </div>
             <img class="delete" src="resources/images/admin/delete.png" data-toggle="modal" data-target="#myModal" data-categoria="'.$row['CATEGORIA'].'" data-id="'.$row['ID_AVISO'].'" data-titulo="'.$row['AV_TITULO'].'" data-contenido="'.$row['AV_CONTENIDO'].'">
          </div>';
		}
     echo' </div>';
	}


?>
<div class="container">
  <div class="col-md-3"></div>
  <a href="editoraviso.php"> <button class="btn btn-success col-md-6" type="button" name="button">Agregar un Nuevo Aviso</button></a>
  <div class="col-md-3"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 id="head"><span class="glyphicon glyphicon-warning-sign"></span> Usted esta a punto de borrar este Aviso!</h4>
         </div>
         <form class="" action="deleteaviso.php" method="post">
           <div  class="modal-body">
             <input id="idaviso" type="hidden" name="idaviso" value="">
             <h1 id="categoria"></h1>
             <h2 id="titulo"></h2>
             <p id="contenido"></p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal">
              <span class="glyphicon glyphicon-ban-circle"></span> Cancelar
            </button>
            <button type="submit" class="btn btn-danger">
              <span class="glyphicon glyphicon-remove"></span> Eliminar
            </button>
          </div>
        </form>
       </div>
     </div>
   </div>




<script type="text/javascript">
    $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
  var categoria = button.data('categoria') // Extract info from data-* attributes
  var titulo = button.data('titulo')
  var contenido = button.data('contenido')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#idaviso').val(id)
  document.getElementById('categoria').innerHTML=categoria
  document.getElementById('titulo').innerHTML=titulo
  document.getElementById('contenido').innerHTML=contenido
})

</script>
</body>
