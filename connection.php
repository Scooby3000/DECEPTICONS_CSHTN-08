<?php
    $host = "localhost:3306";
    $user = "root";
    $password = "dhairya123";
    $db_name = "sh";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
?>
