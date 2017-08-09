<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 3/08/17
 * Time: 11:01 PM
 */
    require_once __DIR__.'/common/user/user.php';

        if(user::validate($_POST['user'],$_POST['password'])){
            header("Location: index.php");
            die();
        }
        else{
            header("Location: login.php");
            die();
        }
