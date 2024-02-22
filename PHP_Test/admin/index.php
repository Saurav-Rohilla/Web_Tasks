<?php
    include("database.php");
    if(isset($_COOKIE["cookie_mail"]) and isset($_COOKIE["cookie_pwd"]))
    {
        $sql = "SELECT *from tbadmincreation where E_Mail = '$_COOKIE[cookie_mail]' and Pwd = '$_COOKIE[cookie_pwd]'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            $link =  "<script>window.location.href = 'editContent.php'</script>";
            echo $link;
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="assets/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="assets/jQuery.js"></script>
    </head>
    <body>
        <form action=# method="POST">
            <div class="indexcontainer maincontainer">
                <div class="semicontainer">
                    <label for="mailtextField">E-Mail</label>
                    <input type="mail" id="mailtextField">
                </div>
                <div class="semicontainer">
                    <label for="pwdtextField">Passowrd</label>
                    <input type="password" id="pwdtextField">
                </div>
                <a href=# id="loginButton">LogIn</a>
                <a href="adminCreation.php">New User</a>
            </div>
        </form>
    </body>
</html>