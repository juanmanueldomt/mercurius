<?php
    $limit = 10;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mercurius";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
