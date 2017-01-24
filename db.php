<?php
    $limit = 10;
    $servername = "localhost";
    $username = "root";
    $password = "501024030550";
    $dbname = "mercurius";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "SET a=1")) {
    printf("Errormessage: %s\n", mysqli_error($con));
}

/* Cierra la conexión */
mysqli_close($con);
?>
