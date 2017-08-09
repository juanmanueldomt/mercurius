<?php

require_once __DIR__.'/common/session/session.php';
require_once __DIR__.'/common/user/user.php';
require_once __DIR__.'/common/aviso/aviso.php';
$usuario = session::currentUser();
if($usuario!=null) {
    if ($usuario->validateAdminPermission()){
        $aviso = new aviso(1,$_POST['categoria'], $_POST['titulo'], $_POST['contenido']);
        $aviso->save();
        header("Location: index.php");
        die();
    }
}