<?php
    include("admin/database.php");
    $sql = "select * from tbpagecontent";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Figma Design">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="admin/Html_fantom/Style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700&display=swap" rel="stylesheet">
    </head>
    <body>

        <header>
            <div class="header-Container">
                <div class="header-content-wrapper container">
                    <div class="header-images">
                        <img src="admin/Html_fantom/images/shape.svg" alt="">
                        <?php
                            $imageFileType = strtolower(pathinfo($row['Logo_Image'],PATHINFO_EXTENSION));   
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
                            {
                                echo "<h1>$row[Logo_Image]</h1>";
                            }
                            else
                            {
                                echo "<img src='admin/logos/".$row['Logo_Image']."' alt='' width=91px height=20px >";
                            }
                        ?>
                        
                    </div>
                    <div class="header-list">
                        <ul class="header-list-ul">
                            <li><a href=""><?php echo "$row[First_List_Item]";?></a></li>
                            <li><a href=""><?php echo"$row[Second_List_Item]"?></a></li>
                            <li><a href=""><?php echo"$row[Third_List_Item]"?></a></li>
                            <li><a href=""><?php echo"$row[Fourth_List_Item]"?></a></li>
                            <li><a href=""><?php echo "$row[Fifth_List_Item]"?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main>
            
                <section>
                   <div class="section-security-headContainer">
                        <div class="section-security-first container">
                            <img src="<?php echo "admin/uploads/".$row['Banner_Image']?>" alt="" width=100% height=100%>
                            <div class="s1-text-wrapper">
                                <div class="s1-head-para-wrapper">
                                    <h1><span class="span_color"><?php echo "$row[Heading]"?></span></h1>
                                    <p><?php echo "$row[Paragraph]"?></p>
                                </div>                             
                                <div class="bottonClass">
                                    <a href="" class="Primary-button s1button"><?php echo"$row[Anchor_Text]"?></a>
                                </div>
                            </div>
                        </div>
                   </div>
                </section>
            
        </main>
    </body>
</html>