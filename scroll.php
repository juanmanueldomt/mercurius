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
  
  $sql = "select * from NOTICIA limit $start,$limit";
  $str='';
  $data = $con->query($sql);
  if($data!=null && $data->num_rows>0){
   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
    //  $str.="<div class='data-container'><p>".$row['ID_NOTICIA']."</p><p>".$row['AUTOR']."</p><p>".$row['CONTENIDO']."</p></div>";
            echo'<div class="media data-container">';
            echo'<div class="media-left">';
            echo'<img src="resources/images/ColoresUpiicsa.jpg" class="media-object">';
            echo'</div>';
            echo'<div class="media-body">';
            echo'<h4 class="media-heading">'.$row[ID_NOTICIA].'</h4>';
            echo'<p>'.substr($row[CONTENIDO],0,70).'...</p>';
            echo'</div>';
            echo'</div>';     
       
            
       
   }
   $str.="<input type='hidden' class='nextpage' value='".($page+1)."'><input type='hidden' class='isload' value='true'>";
   }else{
    $str .= "<input type='hidden' class='isload' value='false'><p>Finished</p>";
   }
  
   
echo $str; 

}

?>