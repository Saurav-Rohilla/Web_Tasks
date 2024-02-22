<?php
    include('database.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $mail = $_POST['mail'];
        $pwd =$_POST['pwd'];

        $sql = "SELECT * from tbadmincreation where E_Mail = '$mail' and Pwd = '$pwd'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            setcookie("cookie_mail",$mail,time()+3600,"/");
            setcookie("cookie_pwd",$pwd,time()+3600,"/");
            echo "1";
        }
    } 
?>