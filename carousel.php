<?php
include('db.php');

  $sql = "SELECT * FROM AVISO ";
  $cont=0;
  $data = $con->query($sql);

  if($data!=null && $data->num_rows>0){
	echo'
  <script>
  function getParameterByName(name) {
     name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
     var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
     results = regex.exec(location.search);
     return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }
  var t=getParameterByName("tag");
  document.getElementById("tag").innerHTML=t;
  </script>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!--
  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

  <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->
    <!-- Wrapper for slides -->
  <div class="container">
    <div class="carousel-inner" role="listbox">';
    while( $row = $data->fetch_array(MYSQLI_ASSOC)){

       if($cont==1){
         echo '<div class="jumbotron green item active">';
     }else{
      echo '<div class="jumbotron green item">';
     }
     echo'
     <h1>Aviso</h1>
     <h2>Ceremonia de Entrega de Reconocimientos</h2>
     <p>Ya puedes registrarte en la pagina de Egresados <br> Nota: no es necesario que hayas concluido tu servicio social ni tus practicas profesionales.</p>
   </div>';
     $cont++;
    }
  echo'  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>';
}
?>
