<?php
    include("database.php");
    if(isset($_COOKIE["cookie_mail"]) and isset($_COOKIE["cookie_pwd"]))
    {
        $sql = "SELECT *from tbadminrecord where E_Mail = '$_COOKIE[cookie_mail]' and Pwd = '$_COOKIE[cookie_pwd]'";
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
        <script src="assets/JQuery.js"></script>
    </head>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mainContainer">

                <div class="semiContainer">
                <label for="mailField">E-Mail</label>
                <input type="text" id="mailField">
                </div>

                <div class="semiContainer">
                <label for="pwdField">Password</label>
                <input type="text" id="pwdField">
                </div>

                <div class="buttonDiv">
                <a href="" class="LogInButton">LogIn</a>
                <a href="adminCreation.php" class="NewUserButton">New User</a>
                </div>
            </div>
        </form>
    </body>
</html>