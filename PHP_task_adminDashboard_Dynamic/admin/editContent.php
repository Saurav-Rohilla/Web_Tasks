<?php
    include('database.php');
    $sql = "SELECT * from tbpagecontent";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
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
                <a href="" class="logOutButton">Log Out</a>
                <div class="semicontainer">

                    <label for="Logos">Logo : </label>
                    <select name="Logos" id="select_fields">
                        <option value="0" id="" class="options">Choose format</option>
                        <option value="Image" id="image_option" class="options">Image</option>
                        <option value="Text" id="text_option" class="options">Text</option>
                    </select>
                    <div class="imgLabel">
                        <input type="file" id="logo_image" accept="image/*" style="width:90px">
                        <p class="upperP"></p>
                    </div>
                    <input type="text" id="logo_text" value="">
                    <?php
                      if(mysqli_num_rows($result)> 0)
                      {
                        $imageFileType = strtolower(pathinfo($row['Logo_Image'],PATHINFO_EXTENSION));   
                            $link;
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
                            {
                                $link = "<script>
                                    $('#logo_text').css('display','block');
                                    $('#text_option').prop('selected',true);
                                    $('#image_option').prop('selected',false);
                                    $('#logo_text').val('$row[Logo_Image]');
                                    </script>";
                            }
                            else
                            {
                                $link = "<script>
                                $('#logo_image').css('display','block');
                                $('#image_option').prop('selected',true);
                                $('#text_option').prop('selected',false);
                                $('p').text('$row[Logo_Image]');
                                </script>";
                                // echo "<p>$row[Logo_Image]</p>";
                            }
                            echo $link;
                      }
                    ?>
                </div>
                <div class="semicontainer menu_list">
                    <label for="">Menu list items:   </label>
                    <input type="text" id="first-list-item" placeholder="First Item" value = "<?php if(mysqli_num_rows($result)> 0){echo $row['First_List_Item'];}?>">
                    <input type="text" id="second-list-item" placeholder="Second Item" value = "<?php if(mysqli_num_rows($result)> 0){echo $row['Second_List_Item'];}?>">
                    <input type="text" id="third-list-item" placeholder="Third Item" value = "<?php if(mysqli_num_rows($result)> 0){echo $row['Third_List_Item'];}?> ">
                    <input type="text" id="fourth-list-item" placeholder="Fourth Item" value = "<?php if(mysqli_num_rows($result)> 0){echo $row['Fourth_List_Item'];}?>">
                    <input type="text" id="fifth-list-item" placeholder="Fifth Item" value= "<?php if(mysqli_num_rows($result)> 0){echo $row['Fifth_List_Item'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="headField">Heading :</label>
                    <input type="text" id="headField" value= "<?php if(mysqli_num_rows($result)> 0){echo $row['Heading'];}?>">
                </div>
                <div class="semicontainer"> 
                    <label for="paraField">Paragraph :</label>
                    <input type="text" id="paraField" value = "<?php if(mysqli_num_rows($result)> 0){echo $row['Paragraph'];}?>">
                </div>
                <div class="semicontainer">
                    <label for="bannerimgField">Banner Image :</label>
                    <div class="imgLabel">
                    <input type="file" id="bannerimgField" accept="image/*" style="width:90px">
                    <p class="lowerP"><?php if(mysqli_num_rows($result)> 0){echo "$row[Banner_Image]";}?></p>
                    </div>
                </div>
                <div class="semicontainer">
                    <label for="">Anchor tag text:</label>
                    <input type="text" id="anchorField" value="<?php if(mysqli_num_rows($result)> 0){echo $row['Anchor_Text'];}?>">
                </div>
                <a href="" class="submitButton" >Submit</a>
            </div>
        </form>
    </body>
</html>