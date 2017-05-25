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
include("db.php");

$sql="SELECT * FROM AVISOS";

 $sql = "SELECT * FROM AVISO ";
  $cont=0;
  $data = $con->query($sql);

  if($data!=null && $data->num_rows>0){
	  echo' <div class="container">';
		while( $row = $data->fetch_array(MYSQLI_ASSOC)){
			echo'<div class="col-sm-10 col-sm-3">
			       <img src="'.$row['URL'].'"style="width:80%;height:200px;">
             <a href="" class="delete"><img src="resources/images/admin/delete.png""></a>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-curso=<%=curso.id%> data-nombre="<%= curso.nombre %>">Registrate</button>

           </div>';
		}
     echo' </div>';
	}
?>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 id="head"><span class="glyphicon glyphicon-lock"></span> Asiste! Registrate ahora</h4>
         </div>
         <div class="modal-body">
           <%= form_for(@asistente) do |f| %>
             <div class="form-group">
               <label><span class="glyphicon glyphicon-user"></span>Nombre</label>
               <%= f.text_field :nombre, class: 'form-control',:required => true%>

             </div>
             <div class="form-group">
               <label><span class="glyphicon glyphicon-user"></span>Apellido Paterno</label>
               <%= f.text_field :apellidop, class: 'form-control',:required => true%>
             </div>
             <div class="form-group">
               <label><span class="glyphicon glyphicon-user"></span>Apellido Materno</label>
               <%= f.text_field :apellidom, class: 'form-control',:required => true%>
             </div>
             <div class="form-group">
               <label><span class="glyphicon glyphicon-info-sign"></span>Boleta</label>
               <%= f.text_field :boleta, class: 'form-control',:required => true%>
             </div>
             <div class="form-group">
               <label><span class="glyphicon glyphicon-inbox"></span>Email</label>
               <%= f.email_field :email, class: 'form-control',:required => true%>
             </div>
              <%= f.hidden_field(:curso_id) %>
             <%= button_tag(type: 'submit', class: "btn btn-primary btn-lg btn-block") do %>
             <span class="glyphicon glyphicon-ok"></span> Save
             <% end %>

             </button>
             <% end%>
           </form>
         </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
             <span class="glyphicon glyphicon-remove"></span> Cancel
           </button>
           <p>Need <a href="#">help?</a></p>
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
  modal.find('#asistente_curso_id').val(recipient)
  modal.find('#head').text("Apuntante ahora y asiste a "+nom)
})
</script>
</body>
