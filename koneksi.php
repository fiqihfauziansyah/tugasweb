<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "web";

    $db_connect = mysqli_connect($server, $user, $password, $db_name);

    if( !$db_connect ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>
