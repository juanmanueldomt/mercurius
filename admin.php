<html>

<?php include("header.php"); ?>

<body>

<?php
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
			       <img class="admin" src="'.$row['URL'].'">
             <img class="delete" src="resources/images/admin/delete.png" data-toggle="modal" data-target="#myModal" data-curso="'.$row['URL'].'" data-nombre="'.$row['ID_AVISO'].'">
          </div>';
		}
     echo' </div>';
	}


?>
<div class="container">
  <form class="form-inline">
    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-plus"></span>
      <p><input id="URL" type="text" class="form-control" placeholder="Ingrese aqui la direccion" required>

    </div>
    <input value="Verificar" class="btn btn-default" data-toggle="modal" data-target="#addmodal"></p>

  </form>
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
              <img id="imgmodal" src="temp" class="imgmodal">
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


   <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title" id="">Usted quiere agregar esta imagen a los avisos?</h4>
         </div>
         <form class="" action="addaviso.php" method="post">
           <input id="inputaddmodal" type="hidden" name="URL" value="">
           <img id="addimgsrc" src="" alt="" class="imgmodal">
         <div class="modal-body">

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Si, Agregar</button>
         </div>
          </form>
       </div>
     </div>
   </div>

<script type="text/javascript">
    $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('curso') // Extract info from data-* attributes
  var nom = button.data('nombre')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#idaviso').val(nom)
  document.getElementById('imgmodal').src=recipient
})

$('#addmodal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Button that triggered the modal
var recipient= document.getElementById('URL').value // Extract info from data-* attributes

// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
document.getElementById('addimgsrc').src=recipient
document.getElementById('inputaddmodal').value=recipient
})

</script>
</body>
