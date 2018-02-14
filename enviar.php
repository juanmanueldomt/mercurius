<?php
require_once __DIR__ . '/common/user/user.php';
require_once __DIR__ . '/common/articulo/articulo.php';

$usuario = session::currentUser();
if ($usuario != null) {

    $articulo = new articulo(null, $_POST['titulo'], $_POST['autor'], $_POST['cargo'], $_POST['cabecera'], $_POST['portada'], $_POST['text']);
    $articulo->save();

    $total = count($_FILES['img']['name']);


    mkdir("./upload/".articulo::maxId());
// Loop through each file
    for($i=0; $i<$total; $i++) {
        //Get the temp file path
        $tmpFilePath = $_FILES['img']['tmp_name'][$i];

        //Make sure we have a filepath
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "./upload/".articulo::maxId()."/" . $_FILES['img']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                //Handle other code here
            }
        }
    }

    header("Location: index.php");
    die();
}
