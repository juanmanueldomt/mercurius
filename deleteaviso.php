<?php
require_once __DIR__ . '/common/user/user.php';
require_once __DIR__ . '/common/database/dataBase.php';
require_once __DIR__ . '/common/aviso/aviso.php';
$usuario = session::currentUser();
if ($usuario != null) {
    if ($usuario->validateAdminPermission()) {

        $aviso = aviso::find($_POST['idaviso']);
        $aviso->delete();
        header("Location: admin.php");
        die();
    }
    else{
        header("Location: login.php");
        die();
    }
} else {
    $_SESSION['msgtype'] = "danger";
    $_SESSION['msg'] = "<strong>Error</strong> Hubo un error en la autenticacion, accede nuevamente porfavor.";
    header("Location: login.php");
    die();
}

