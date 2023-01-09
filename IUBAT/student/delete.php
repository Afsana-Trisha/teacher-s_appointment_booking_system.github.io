<?php

    include "connect.php";
    if(isset($_POST['delete']))
    {
        $sl= $_POST['sl'];
        $query="DELETE FROM `booking` WHERE sl ='$sl' ";
        $query_run= mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Cancelled Successfully"); </script>';
            header("location:request.php");
        }
        else{
            echo '<script> alert("Try Again"); </script>';

        }
    }


?>