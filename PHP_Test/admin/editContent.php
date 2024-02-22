<?php
    include("database.php");
    $sql = "SELECT * from tbeditcontent";
    $result = mysqli_query($conn , $sql);
    $row;
    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_array($result);
    }
    if(!isset($_COOKIE["cookie_mail"]) and !isset($_COOKIE["cookie_pwd"]))
    {
        print_r("Coookies destroyed!!!!!!!!!!!!");
        $link = "<script>window.location.href = 'index.php'</script>";
        echo $link;
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="assets/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="assets/jQuery.js"></script>
    </head>
    <body>
        <form action=# method="POST" enctype="multipart/form-data">
            <div class="editContainer maincontainer">
            <a href=# id="logoutButton">Log Out</a>
                <!-- <div class="semicontainer">
                    <label for="">Company Logo/Name :</label>
                    <select name="" id="selectField">
                        <option value="0">Choose Format</option>
                        <option id="logoImage">Image</option>
                        <option id="logoText">Text</option>
                    </select>
                    <input type="text" id="inputtextField">
                    <input type="file" id="inputimageField" accept="Image/*">
                </div>
                <div class="semicontainer">
                    <label for="">List Items :</label>
                    <input type="text" id="firstlistItem" placeholder="First ListItem">
                    <input type="text" id="secondlistItem" placeholder="Second ListItem">
                    <input type="text" id="thirdlistItem" placeholder="Third ListItem">
                    <input type="text" id="fourthlistItem" placeholder="Fourth ListItem">
                    <input type="text" id="fifthlistItem" placeholder="Fifth ListItem">
                </div>
                <div class="semicontainer">
                    <label for="">Heading</label>
                    <input type="text" placeholder="First ListItem">
                </div> -->
                <div class="semicontainer">
                    <label for="">Post Heading :</label>
                    <input type="text" id="postHeading" placeholder="BigHeading" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Post_Heading'];}?>">
                    <input type="text" id="postsmallHeading"  placeholder="Small Heading" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Post_Small_Heading'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="">Post Paragraph :</label>
                    <input type="text" id="postPara" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Post_Paragraph'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="">Post Image :</label>
                    <input type="file" id="postImage">
                    <p><?php if(mysqli_num_rows($result)>0){ echo $row['Post_Image'];}?></p>
                </div>
                <div class="semicontainer">
                    <label for="">Quick Links :</label>
                    <input type="text" id="firstquickItem" placeholder="First Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Quick_Link_1'];}?>">
                    <input type="text" id="secondquickItem" placeholder="Second Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Quick_Link_2'];}?>">
                    <input type="text" id="thirdquickItem" placeholder="Third Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Quick_Link_3'];}?>">
                    <input type="text" id="fourthquickItem" placeholder="Fourth Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Quick_Link_4'];}?>">
                    <input type="text" id="fifthquickItem" placeholder="Fifth Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Quick_Link_5'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="">Services :</label>
                    <input type="text" id="firstserviceItem" placeholder="First Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Service_Link_1'];}?>">
                    <input type="text" id="secondserviceItem" placeholder="Second Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Service_Link_2'];}?>">
                    <input type="text" id="thirdserviceItem" placeholder="Third Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Service_Link_3'];}?>">
                    <input type="text" id="fourthserviceItem" placeholder="Fourth Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Service_Link_4'];}?>">
                    <input type="text" id="fifthserviceItem" placeholder="Fifth Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Service_Link_5'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="">Legal :</label>
                    <input type="text" id="firstlegalItem" placeholder="First Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Legal_Link_1'];}?>">
                    <input type="text" id="secondlegalItem" placeholder="Second Link" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Legal_Link_2'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="">Footer social paragraphs :</label>
                    <input type="text" id="firstparaItem" placeholder="First Item" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Footer_P'];}?>">
                    <input type="text" id="secondparaItem" placeholder="Second Item" value="<?php if(mysqli_num_rows($result)>0){ echo $row['Footer_P_small'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="">Footer Image :</label>
                    <input type="file" id="footerImage">
                    <p><?php if(mysqli_num_rows($result)>0){ echo $row['Footer_Img'];}?></p>
                </div>
                <a href=# id="submitButton">Submit</a>
                <!-- <a href="adminCreation.php">New User</a> -->
            </div>
        </form>
    </body>
</html>