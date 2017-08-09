<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 7/08/17
 * Time: 08:35 PM
 */

require_once __DIR__.'/../user/user.php';
class session
{
    public static function sessionInit(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function destroy(){
        session_start();
        session_unset();
        session_destroy();
    }

    public static function currentUser(){
        session::sessionInit();
        if (isset($_SESSION['user'])) {
            $usuario = $_SESSION['user'];
            return $usuario;
        }
        return null;
    }
}