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

$sql = "SELECT * FROM NOTICIA ORDER BY FECHA  DESC LIMIT $start,$limit";
if(isset($_REQUEST['tag']) && $_REQUEST['tag']!=''){
  $tag=$_REQUEST['tag'];
  $sql="SELECT * FROM NOTICIA inner join ETIQUETA ON ETIQUETA.ID_NOTICIA=NOTICIA.ID_NOTICIA WHERE ETIQUETA='$tag' ORDER BY FECHA  DESC LIMIT $start,$limit";
}

  $str='';
    $cont=0;
  $data = $con->query($sql);
  if($data!=null && $data->num_rows>0){
   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
    //  $str.="<div class='data-container'><p>".$row['ID_NOTICIA']."</p><p>".$row['AUTOR']."</p><p>".$row['CONTENIDO']."</p></div>";
    echo'
      <div class="media col-sm-4">

        <div class="media-body">
          <h4 class="media-heading"><a href="show.php?article='.$row['ID_NOTICIA'].'">'.$row['TITULO'].'</a></h4>
          <p>'.$row['FECHA'].'</p>
        </div>
        <div class="media-right">
          <img src="'.$row['PORTADA'].'" class="media-object">
        </div>
      </div>';
   }
   $str.="<input type='hidden' class='nextpage' value='".($page+1)."'><input type='hidden' class='isload' value='true'>";
   }else{
      $str .='<hr class="featurette-divider">';
    $str .= "<input type='hidden' class='isload' value='false'><center><p>Finished</p></center>";
   }
echo $str;

}


?>
