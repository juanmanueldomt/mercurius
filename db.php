<?php
    $limit = 10;
    $servername = "localhost";
    $username = "root";
    $password = "501024030550";
    $dbname = "Boletin_Upiicsa";
        
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(mysqli_connect_errno()){
        echo "Error en la conexion de base de datos";
        exit();
    }
?>