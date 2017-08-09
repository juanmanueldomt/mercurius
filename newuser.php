<?php
    require_once __DIR__.'/common/user/user.php';
    if( user::register($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['password'])) {
        header("Location: login.php");
        die();
    }
    else{
        header("Location: register.php");
        die();
    }

