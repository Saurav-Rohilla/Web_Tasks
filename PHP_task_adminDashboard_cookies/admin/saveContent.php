<?php
    include("database.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $head = $_POST['head'];
        $para = $_POST['para'];
        $imgName = $_FILES['imgName']['name'];

        if(isset($_FILES["imgName"]))
        {
            $fileName = $_FILES["imgName"]["name"];
            $filetempName = $_FILES["imgName"]["tmp_name"];
            move_uploaded_file($filetempName,"uploads/".$fileName);
        }
        $query;
        $sql = "select * from tbContent";
        $result = mysqli_query($conn ,$sql);
        if(mysqli_num_rows($result)>0)
        {
            if($imgName != "")
            {
                $query = "UPDATE tbcontent set Heading = '$head', Paragraph = '$para',Image_Name = '$imgName' ";
            }
            else
            {
                $query = "UPDATE tbcontent set Heading = '$head' , Paragraph = '$para' ";
            }
        }
        else
        {
            $query = "INSERT into tbcontent(Heading, Paragraph, Image_Name) values ('$head', '$para', '$imgName')"; 
        }
        print_r($query);
        if(mysqli_query($conn, $query))
        {
            print_r("Data INserted");
        }
        else
        {
            print_r("Data not inserted");
        }
        
    }
?>