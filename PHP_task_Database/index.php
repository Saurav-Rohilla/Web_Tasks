<?php
    include ('database.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="assets/index.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="assets/JQuery.js"></script>
    </head>
    <body>
       
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="main-container">
                    <div class="f_Name">
                        <label for="textField_fName">First Name</label>
                        <input type="text" name="textField_fName" id="textField_fName" required><br>
                    </div>

                    <div class="m_Name">
                        <label for="textField_mName">Middle Name</label>
                        <input type="text" name="textField_mName" id="textField_mName" required><br>
                    </div>

                    <div class="p_Number">
                        <label for="textField_phone">Phone Number</label>
                        <input type="tel" name="textField_phone" id="textField_phone" required><br>
                    </div>

                    <div class="l_Name">
                        <label for="textField_lName">Last Name</label>
                        <input type="text" name="textField_lName" id="textField_lName" required><br>
                    </div>

                    <input type="file" name="fileUpload" class="file_Upload">

                    <input type="submit" class="submitButton" name="submitButton" value="Click to Submit">
    
            </div>
        </form>
        <?php
            $sql = "select First_Name, Middle_Name, Last_Name,Phone_Number,Image_Name from tbrecord";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0)
            {
                while($row= mysqli_fetch_assoc($result))
                {
                    echo "First name: " . $row["First_Name"] . "  Middle name: " . $row["Middle_Name"] . "   Last name: " . $row['Last_Name'] . " Phone_Number: " . $row['Phone_Number'] ."<br>";
                    echo "<img src='uploads/" . $row['Image_Name'] . "' alt='Image' width=100px height=100px'><br>";
                }
            }
        ?>
        
    </body>
    
</html>
