<?php
    include('database.php');
    // $temp = 1;
    // echo $temp;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $mail = $_POST["mail"];
        $pwd = $_POST["pwd"];
        

        $sql = "INSERT INTO tbadminrecord (First_Name,Last_Name,E_Mail,Pwd) VALUES ('$fName', '$lName','$mail','$pwd')";
        if(mysqli_query($conn, $sql))
        {
           echo "1";
        }
    }
    // echo $temp;
?>