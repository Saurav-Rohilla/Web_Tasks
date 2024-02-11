<?php
    $server = "localhost";
    $username = "root";
    $pwd = "";
    $database = "dbadmin";

    $conn = mysqli_connect($server, $username , $pwd , $database);
    if(!$conn)
    {
        die("Could not connect to database");
    }
    
?>