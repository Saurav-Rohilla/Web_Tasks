<?php
    $serverName = "localhost";
    $usernName = "root";
    $password = "";
    $dbName = "dbphptask";

    $conn = mysqli_connect($serverName, $usernName, $password, $dbName);
     
    if(!$conn)
    {
        die("Could not connect to server");
    }

?>