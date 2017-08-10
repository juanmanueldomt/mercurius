<?php
require_once __DIR__ . '/common/user/user.php';
require_once __DIR__ . '/common/articulo/articulo.php';

$usuario = session::currentUser();
if ($usuario != null) {

    $articulo = new articulo(null, $_POST['titulo'], $_POST['autor'], $_POST['cargo'], $_POST['cabecera'], $_POST['portada'], $_POST['text']);
    $articulo->save();
    header("Location: index.php");
    die();
}
