<?php
    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $dbname= "dbphpTest";

    $conn = mysqli_connect($servername, $username, $pwd , $dbname);
    if(!$conn)
    {
        die("Coudn't connect!!!");
    }
    $sql = "create table tbeditContent (
        Id INT(3) Primary key auto_increment,
        LogoImg varchar(255),
        Menu_Item_1 varchar(255),
        Menu_Item_2 varchar(255),
        Menu_Item_3 varchar(255),
        Menu_Item_4 varchar(255),
        Menu_Item_5 varchar(255),
        Banner_Heading varchar(255),
        Banner_Paragraph varchar(255),
        Banner_Lower_Button varchar(255),
        Banner_Upper_Text varchar(255),
        Banner_Phone varchar(255),
        Banner_Image varchar(255)
    )";
    // if(mysqli_query($conn, $sql))
    // {
    //     print_r("table created successfully ");
    // }
    // else
    // {
    //     print_r("table not created");
    // }

?>