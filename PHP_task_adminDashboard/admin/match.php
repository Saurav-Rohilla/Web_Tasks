<?php
    include('database.php');
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $mail = $_POST["mail"];
        $pwd = $_POST["pwd"];
        $sql = "SELECT * from tbadminrecord where E_Mail = '$mail' and Pwd = '$pwd'";

        if(mysqli_query($conn, $sql))
        {
            $_SESSION['mail'] = $mail;
            $_SESSION['pwd'] = $pwd;
            echo "1";
        }
    }
?>