
<?php
        if($_SERVER['REQUEST_METHOD'] === "POST")
        {
                $Fname = $_POST['firstname'];
                $MName = $_POST['middlename'];
                $PNumber = $_POST['phone'];
                $LName = $_POST['lastname'];
                $data = $Fname . " " . $MName . " " . $PNumber . " " . $LName; 
                echo json_encode($data);
        }      
?>
