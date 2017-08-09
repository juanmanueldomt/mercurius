<?php
require_once __DIR__ . '/common/session/session.php';
require_once __DIR__ . '/common/user/user.php';
require_once __DIR__ . '/common/database/dataBase.php';
require_once __DIR__ . '/common/articulo/articulo.php';

$usuario = session::currentUser();
if ($usuario != null) {
    if ($usuario->validateAdminPermission()) {

        $articulo = new articulo(intval($_GET['id']));
        if($articulo->getId()!=null) {
            $action = $_GET['action'];
            $status = "";
            switch ($action) {
                case "autorizar":
                    $status = "AUTORIZADO";
                    break;
                case "delete":
                    $status = "DELETE";
                    break;
                case "edit":
                    $status = "EDIT";
                    break;
                case "deauth":
                    $status = "RECIBIDO";
                    break;
            }
            $articulo->setAuthorized($status);
            $articulo->update();
        }
        header("Location: admons.php");
        die();
    } else {
        header("Location: index.php");
        die();
    }
} else {
    header("Location: login.php");
    die();
}


