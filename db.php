<?php
    $limit = 10;
    $servername = "localhost";
    $username = "notiadmin";
    $password = "N0T1UP11C54";
    $dbname = "mercurius";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
