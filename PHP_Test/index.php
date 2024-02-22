<?php
    include("admin/database.php");
    $sql = "select * from tbeditcontent";
    $result = mysqli_query($conn,$sql);
    $row;
    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_array($result);
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Figma Design">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link rel="stylesheet" href="admin/assets/style_css.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    </head>
    <body>
        <section>
            <div class="banner-section">
                <div class="container">
                    <div class="row banner-content-wrapper">
                        <div class="col-2 left-banner">
                            <img src="admin/assets/images/Logo.svg" alt="Image">
                            <ul class="banner-list">
                                <li><a href=#>Home</a></li>
                                <li><a href=#>About Us</a></li>
                                <li><a href=#>Services <img src="admin/assets/images/Vector.svg" alt="Image"></a></li>
                                <li><a href=#>Case Studies</a></li>
                                <li><a href=#>Contact Us</a></li>

                            </ul>
                        </div>
                        <div class="col-10 right-banner">
                            <div class="col-4 row right-upper-sub-banner">
                                <div class="row sub-head-phone">
                                    <img src="admin/assets/images/phone.svg" alt="Image">
                                    <p>+61 3 9644 3003</p>
                                </div>
                                <div class="">
                                    <a href=# class="primary-button" >Get Free Audit <img src="admin/assets/images/rightArrow.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="banner-text-wrapper">
                                <h1>All About Workhorse Digital</h1>
                                <p>We are passionate artisans of the virtual realm, crafting captivating digital experiences that leave a lasting impact. We are passionate artisans of the virtual realm.</p>
                                <div>
                                    <a href=# class="primary-button">Free Digital Marketing Masterplan <img src="admin/assets/images/rightArrow.svg" alt="Image"></a>
                                </div>
                            </div>
                            <img src="admin/assets/images/Asset 10 2.svg" alt="Image" class="banner-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Post SEction -->
        <section>
            <div class="post-section">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10 post-container">
                            <img src="admin/assets/images/Frame 1000002882.svg" alt="Image" class="post-upper-image">
                            <h2><?php if(mysqli_num_rows($result)>0) {echo "$row[Post_Heading]";} else{ echo "Unleashing boundless creativity to reshape the digital landscape and inspire meaningful connections.";}?></h2>
                            <div class="row post-lower-section">
                                <div class="post-image">
                                    <?php
                                        if(mysqli_num_rows($result)>0)
                                        {
                                            // echo "<img src='admin/uploads/".$row['Banner_Image']."' height='240px' width='100%'>";
                                            echo "<img src='admin/uploads/".$row['Post_Image']."' height='260px' width='290px'>";
                                        }
                                        else
                                        {
                                            echo "<img src='admin/assets/images/Rectangle 22.svg' alt=''>";
                                        }
                                    ?>
                                </div>
                                <div class="post-content">
                                    <h3><?php if(mysqli_num_rows($result)>0) {echo "$row[Post_Small_Heading]";} else{ echo "The power of imagination to reshape the digital landscape";}?></h3>
                                    <p><?php if(mysqli_num_rows($result)>0) {echo "$row[Post_Paragraph]";} else{ echo "Crafting innovative and captivating experiences that transcend the ordinary. By infusing our work with artistic flair and technical excellence, we aim to inspire meaningful connections between brands and their audiences.";}?></p>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="footer-section">
                <div class="container footer-container">
                    <div class="row"> 
                        <div class="col-5 footer-brand-section">
                            <?php
                                if(mysqli_num_rows($result)>0)
                                {
                                    echo "<img src='admin/uploads/".$row['Footer_Img']."' height='60px' width='290px'>";
                                }
                                else
                                {
                                    echo "<img src='admin/uploads/Group 1000002830.svg' alt='Image' class='footer-logo'>";
                                }
                            ?>
                            
                            <p><?php if(mysqli_num_rows($result)>0) {echo "$row[Footer_P]";} else{ echo"Follow Our Social";}?></p>
                            <p class="follow-p"><?php if(mysqli_num_rows($result)>0) {echo "$row[Footer_P_small]";} else{ echo"Lorem ipsum dolor sit amet consectetur. Felis set porttitor velit neque vitae odio suspendisse dignissim metus augue.";}?></p>
                            <div class="row social-footer">
                                <img src="admin/assets/images/Vector (1).svg" alt="Image" class="footer-social">
                                <img src="admin/assets/images/Vector (2).svg" alt="Image" class="footer-social">
                                <img src="admin/assets/images/Vector (3).svg" alt="Image" class="footer-social">
                                <img src="admin/assets/images/Vector (4).svg" alt="Image" class="footer-social">
                            </div>
                        </div>  
                        <div class="col-7 footer-lists">
                            <div class="row">
                                <div class="footer-list-1">
                                    <ul class="footer-ul">
                                        <li><p>Quick Links</p></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Quick_Link_1]";} else{ echo"Home";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Quick_Link_2]";} else{ echo"About us";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Quick_Link_3]";} else{ echo"Case Studies";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Quick_Link_4]";} else{ echo"Contact Us";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Quick_Link_5]";} else{ echo"Contact Us";}?></a></li>
                                    </ul>
                                </div>
                                <div class="footer-list-2">
                                    <ul class="footer-ul">
                                        <li><p>Services</p></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Service_Link_1]";} else{ echo"Strategy & Consultancy";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Service_Link_2]";} else{ echo"SEO Services";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Service_Link_3]";} else{ echo"PPC Management";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Service_Link_4]";} else{ echo"Dev & Design";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Service_Link_5]";} else{ echo"Branding";}?></a></li>
                                    </ul>
                                </div>
                                <div class="footer-list-3">
                                    <ul class="footer-ul">
                                        <li><p>Legal</p></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Legal_Link_1]";} else{ echo"Terms & Condition";}?></a></li>
                                        <li><a href=#><?php if(mysqli_num_rows($result)>0) {echo "$row[Legal_Link_1]";} else{ echo"Privacy & Policy";}?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-border"></div>
                    <p class="bottonmost-p">© 2019 Alyeska Resor</p>
                </div>
            </div>
        </footer>
    </body>
</html>