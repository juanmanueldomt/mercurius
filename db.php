<?php
    $limit = 10;
    $servername = "localhost";
    $username = "kronoz";
    $password = "501024030550jM";
    $dbname = "mercurius";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
