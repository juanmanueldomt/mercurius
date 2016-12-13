<?php
include('db.php');

 if(isset($_REQUEST['actionfunction']) && $_REQUEST['actionfunction']!=''){
$actionfunction = $_REQUEST['actionfunction'];
  
   call_user_func($actionfunction,$_REQUEST,$con,$limit);
}
function showData($data,$con,$limit){
  $page = $data['page'];
   if($page==1){
   $start = 0;  
  }
  else{
  $start = ($page-1)*$limit;
  }
  
  $sql = "SELECT * FROM NOTICIA LIMIT $start,$limit";
  $str='';
    $cont=0;
  $data = $con->query($sql);
  if($data!=null && $data->num_rows>0){
   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
    //  $str.="<div class='data-container'><p>".$row['ID_NOTICIA']."</p><p>".$row['AUTOR']."</p><p>".$row['CONTENIDO']."</p></div>";
       
       echo '<hr class="featurette-divider">';
            echo'<div class="row featurette">';
            echo'<div class="col-md-7">';
            echo'<h2 class="featurette-heading">'.$row[TITULO].'</h2>';
            echo'<p class="lead">'.substr($row[CONTENIDO],0,240).'</p>';
            echo'</div>';
            echo'<div class="col-md-5">';
            echo'<img class="featurette-image img-responsive" src="resources/images/ColoresUpiicsa.jpg" alt="Generic placeholder image">';
            echo'</div>';
        echo'</div>';

   }
   $str.="<input type='hidden' class='nextpage' value='".($page+1)."'><input type='hidden' class='isload' value='true'>";
   }else{
      $str .='<hr class="featurette-divider">';
    $str .= "<input type='hidden' class='isload' value='false'><center><p>Finished</p></center>";
   }
  
   
echo $str; 

}

?>