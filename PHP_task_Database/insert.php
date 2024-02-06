<?php
    include ('database.php');
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
       $fName = $_POST["fName"];
       $mName = $_POST["mName"];
       $pNumber = $_POST["pNumber"];
       $lName = $_POST["lName"];

       $imgName="";
       if(isset($_FILES["imgFile"]))
       {
            $imgName= $_FILES["imgFile"]['name'];
            $imgNameTemp=$_FILES['imgFile']['tmp_name'];
            move_uploaded_file($imgNameTemp,"uploads/".$imgName);
       }

       $sql = "INSERT INTO tbrecord (First_Name ,Middle_Name ,Last_Name ,Phone_Number ,Image_Name) VALUES ('$fName','$mNAme','$lName','$pNumber','$imgName')";
       
       if(mysqli_query($conn,$sql))
       {
            echo "Done inserting";
       }
       else
       {
        echo "Not interested";
       }
    }
?>