<?php
    $mysql_host = "localhost";
    $port = "3306";
    $user = "root";
    $password = "";
    $database = "xu_cms";

    $conn=mysqli_connect($mysql_host, $user, $password, $database);

    if(!$conn)
    {
        die("Nie podłączono bazy");
    }
?>