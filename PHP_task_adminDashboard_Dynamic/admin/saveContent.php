<?php
    include("database.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $first_item = $_POST['first_item'];
        $second_item = $_POST['second_item'];
        $third_item = $_POST['third_item'];
        $fourth_item = $_POST['fourth_item'];
        $fifth_item = $_POST['fifth_item'];
        $imgLogo;
        if(isset($_FILES['imgLogo']))
        {
            $imgLogo = $_FILES['imgLogo']['name'];
        }
        else
        {
            $imgLogo = $_POST['imgLogo'];
        }
        
        
        $anchorText = $_POST['anchorText'];
        $head = $_POST['head'];
        $para = $_POST['para'];
        $bannerimgName = $_FILES['bannerimgName']['name'];
       
    
            if(isset($_FILES["bannerimgName"]))
            {
                $fileName = $_FILES["bannerimgName"]["name"];
                $filetempName = $_FILES["bannerimgName"]["tmp_name"];
                move_uploaded_file($filetempName,"uploads/".$fileName);
            }
            if(isset($_FILES["imgLogo"]))
            {
                $fileName = $_FILES["imgLogo"]["name"];
                $filetempName = $_FILES["imgLogo"]["tmp_name"];
                move_uploaded_file($filetempName,"logos/".$fileName);
            }
            $query;
            $sql = "select * from tbpageContent";
            $result = mysqli_query($conn ,$sql);
            if(mysqli_num_rows($result)>0)
            {
            $query = "UPDATE tbpagecontent set Heading = '$head', Paragraph = '$para' , Banner_Image = '$bannerimgName', Logo_Image = '$imgLogo', First_List_Item = '$first_item' , Second_List_Item='$second_item', Third_List_Item = '$third_item' ,Fourth_List_Item = '$fourth_item',Fifth_List_Item = '$fifth_item' ,Anchor_Text='$anchorText'";
            }
            else
            {
                $query = "INSERT into tbpagecontent (Heading, Paragraph, Banner_Image, Logo_Image,First_List_Item ,Second_List_Item,Third_List_Item,Fourth_List_Item,Fifth_List_Item,Anchor_Text) values ('$head', '$para', '$bannerimgName','$imgLogo','$first_item','$second_item','$third_item','$fourth_item','$fifth_item','$anchorText')"; 
            }
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