<?php
    include("database.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    // {
    //     $logoImg;
    //     if(isset($_FILES['logoImg']))
    //     {
    //         $logoImg = $_FILES['logoImg']['name'];
    //     }
    //     else
    //     {
    //         $logoImg = $_POST['logoImg'];
    //     }
        $postHeading = $_POST['postbigHeading'];
        $postsmallHeading = $_POST['postsmallHeading'];
        $postPara = $_POST['postPara'];

        $firstquickItem =$_POST['firstquickItem'];
        $secondquickItem = $_POST['secondquickItem'];
        $thirdquickItem = $_POST['thirdquickItem'];
        $fourthquickItem = $_POST['fourthquickItem'];
        $fifthquickItem = $_POST['fifthquickItem'];

        $firstserviceItem = $_POST['firstserviceItem'];
        $secondserviceItem = $_POST['secondserviceItem'];
        $thirdserviceItem = $_POST['thirdserviceItem'];
        $fourthserviceItem = $_POST['fourthserviceItem'];
        $fifthserviceItem = $_POST['fifthserviceItem'];

        $firstlegalItem = $_POST['firstlegalItem'];
        $secondlegalItem = $_POST['secondlegalItem'];

        $firstparaItem= $_POST['firstparaItem'];
        $secondparaItem= $_POST['secondparaItem'];

        if(isset($_FILES['footerImage']))
        {
            $footerimgName = $_FILES['footerImage']['name'];
            $footerimgtempName = $_FILES['footerImage']['tmp_name'];
            move_uploaded_file($footerimgtempName,"uploads/".$footerimgName);
        }

        if(isset($_FILES['postImage']))
        {
            $imgName = $_FILES['postImage']['name'];
            $imgtempName = $_FILES['postImage']['tmp_name'];
            move_uploaded_file($imgtempName,"uploads/".$imgName);
        }
        print_r($postHeading);
        print_r($postsmallHeading);
        print_r($postPara);

        $link = "select * from tbeditcontent";
        $sql;
        $result = mysqli_query($conn,$link);
        if(mysqli_num_rows($result)>0)
        {
            if(isset($_FILES['postImage']))
            {
                $sql = "UPDATE tbeditcontent set Post_Heading='$postHeading',Post_Small_Heading='$postsmallHeading' , Post_Image='$imgName' ,Post_Paragraph='$postPara',Quick_Link_1='$firstquickItem',Quick_Link_2='$secondquickItem',Quick_Link_3='$thirdquickItem',Quick_Link_4='$fourthquickItem',Quick_Link_5='$fifthquickItem',Service_Link_1='$firstserviceItem',Service_Link_2='$secondserviceItem',Service_Link_3='$thirdserviceItem',Service_Link_4='$fourthserviceItem',Service_Link_5='$fifthserviceItem',Legal_Link_1='$firstlegalItem',Legal_Link_2='$secondlegalItem',Footer_P='$firstparaItem',Footer_P_small='$secondparaItem',Footer_Img='$footerimgName' ";
            }
            else
            {
                $sql = "UPDATE tbeditcontent set Post_Heading='$postHeading',Post_Small_Heading='$postsmallHeading',Post_Paragraph='$postPara' ,Quick_Link_1='$firstquickItem',Quick_Link_2='$secondquickItem',Quick_Link_3='$thirdquickItem',Quick_Link_4='$fourthquickItem',Quick_Link_5='$fifthquickItem' ,Service_Link_1='$firstserviceItem',Service_Link_2='$secondserviceItem',Service_Link_3='$thirdserviceItem',Service_Link_4='$fourthserviceItem',Service_Link_5='$fifthserviceItem',Legal_Link_1='$firstlegalItem',Legal_Link_2='$secondlegalItem' ,Footer_P='$firstparaItem',Footer_P_small='$secondparaItem' ,Footer_Img='$footerimgName'";
            }
        }
        else
        {
            $sql = "INSERT into tbeditcontent (Post_Heading,Post_Small_Heading,Post_Image,Post_Paragraph,Quick_Link_1,Quick_Link_2,Quick_Link_3,Quick_Link_4,Quick_Link_5,Service_Link_1,Service_Link_2,Service_Link_3,Service_Link_4,Service_Link_5,Legal_Link_1,Legal_Link_2,Footer_P,Footer_P_small,Footer_Img) values('$postHeading','$postsmallHeading','$imgName','$postPara','$firstquickItem','$secondquickItem','$thirdquickItem','$fourthquickItem','$fifthquickItem','$firstserviceItem' ,'$secondserviceItem','$thirdserviceItem','$fourthserviceItem','$fifthserviceItem','$firstlegalItem','$secondlegalItem','$firstparaItem','$secondparaItem','$footerimgName')";
        }
        if(mysqli_query($conn, $sql))
        {
            print_r("Inserted successfully");
        }
        else
        {
            print_r("Nopr");
        }


    }
?>