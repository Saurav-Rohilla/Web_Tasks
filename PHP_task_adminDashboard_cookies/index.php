<?php
    include ('admin/database.php');
    $sql = "select * from tbcontent";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo "<h1>$row[Heading]</h1>";
    echo "<p>$row[Paragraph]</p>";
    echo "<img width=500px height=500px src='admin/uploads/" . $row['Image_Name'] . "'>";

?>