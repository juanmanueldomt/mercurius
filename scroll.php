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
    echo '<div class="mdl-grid">';
   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
    echo'

    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-shadow--2dp">

      <a href="show.php?article='.$row['ID_NOTICIA'].'">
        <figure class="mdl-card__media"><img src="'.$row['PORTADA'].'" alt=""></figure></a>

      <div class="mdl-card__title">
        <h1 class="mdl-card__title-text">'.$row['TITULO'].'</h1>
      </div>
      <div class="mdl-card__supporting-text">
        <p>'.$row['CABECERA'].'</p>
      </div>
      <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="show.php?article='.$row['ID_NOTICIA'].'">Leer más</a>
      <div class="mdl-layout-spacer"></div>
      <button class="mdl-button mdl-button--icon mdl-button--colored"><i class="material-icons">favorite</i></button>
      <button class="mdl-button mdl-button--icon mdl-button--colored"><i class="material-icons">share</i></button>
      </div>
    </div>
      ';
   }
   echo "</div>";
   $str.="<input type='hidden' class='nextpage' value='".($page+1)."'><input type='hidden' class='isload' value='true'>";
   }else{
      $str .='<hr class="featurette-divider">';
    $str .= "<input type='hidden' class='isload' value='false'><center><p>Finished</p></center>";
   }
echo $str;

}


?>
