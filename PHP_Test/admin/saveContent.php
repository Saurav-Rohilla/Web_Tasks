<?php
    include('database.php');
    print_r("Inside id in php");
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        print_r("Inside id in php");
        $FName = $_POST['FName'];
        $LName = $_POST['LName'];
        $Mail = $_POST['Mail'];
        $pwd = $_POST['pwd'];
        
        $sql = "select * from tbadminCreation where E_Mail = '$Mail'";
        $result = mysqli_query($conn,$sql);
        $query;
        if(mysqli_num_rows($result)>0)
        {
            $query = "UPDATE tbadminCreation set pwd = '$pwd' where E_Mail='$Mail'";
        }
        else
        {
            $query = "INSERT into tbadminCreation (First_Name,Last_Name,E_Mail,Pwd) values ('$FName','$LName','$Mail','$pwd')";
        }

        if(mysqli_query($conn,$query))
        {
            print_r("Inserted successfully");
            $link = "<script>window.location.href = 'index.php';</script>";
            echo $link;
            echo "1";
        }
        else
        {
            print_r("Not Found");
        }



    }
?>