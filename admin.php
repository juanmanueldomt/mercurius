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
        <link rel="stylesheet" href="resources/bootstrap-3.3.5-dist/css/bootstrap-theme-mercurius.css">
    <!-- FIN-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>

<body>

<?php
include("header.php");
include("db.php");

$sql="SELECT * FROM AVISOS";

 $sql = "SELECT * FROM AVISO ";
  $cont=0;
  $data = $con->query($sql);

  if($data!=null && $data->num_rows>0){
	  echo' <div id="contavi" class="container">';
		while( $row = $data->fetch_array(MYSQLI_ASSOC)){
			echo'<div class="col-sm-10 col-sm-3">
			       <img class="admin" src="'.$row['URL'].'">
             <img class="delete" src="resources/images/admin/delete.png" data-toggle="modal" data-target="#myModal" data-curso:"'.$row['URL'].'" data-nombre="'.$row['ID_AVISO'].'">
             </div>';
		}
     echo' </div>';
	}


?>
<div class="container">
  <form class="" action="addaviso.php" method="post">
    <div class="input-group">
      <span class="input-group-addon glyphicon glyphicon-plus"></span>
      <input type="text" class="form-control" placeholder="Ingrese aqui la direccion" required>

    </div>
    <input type="submit" name="" value="Agregar nuevo aviso" class="btn btn-default" >
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 id="head"><span class="glyphicon glyphicon-lock"></span> "Usted esta a punto de borrar este Aviso!"</h4>
         </div>
         <div  class="modal-body">
           <h3 id="aviso"></h3>
         </div>
         <div class="modal-footer">
           <button id="proceed" type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" href="deleteaviso.php?id=">
             <span class="glyphicon glyphicon-remove"></span> Eliminar
           </button>
           <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
             <span class="glyphicon glyphicon-remove"></span> Cancelar
           </button>
           </div>
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
  modal.find('#aviso').text(nom)
})
</script>
</body>
