<?php
    include('database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $delId = $_POST["delId"];
        $sql = "delete from tbrecord where id = '$delId'";
        if(mysqli_query($conn, $sql))
        {
            echo "Deleted and inside php file";
        }
        else
        {
            echo "Not delted";
        }
    }
?>