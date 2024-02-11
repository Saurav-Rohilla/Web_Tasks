<?php
    include('database.php');
    // session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $mail = $_POST["mail"];
        $pwd = $_POST["pwd"];
        $sql = "SELECT * from tbadminrecord where E_Mail = '$mail' and Pwd = '$pwd'";

        if(mysqli_query($conn, $sql))
        {
            setcookie("cookie_mail", $mail,time() + 3600,"/");
            setcookie("cookie_pwd", $pwd,time() + 3600,"/");
            echo "1";
        }
    }
?>