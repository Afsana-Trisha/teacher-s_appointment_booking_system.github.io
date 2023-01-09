<?php

    include "connect.php";
    if(isset($_POST['delete']))
    {
        $id= $_POST['id'];
        $query="DELETE FROM `contact` WHERE id ='$id' ";
        $query_run= mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Delete Successfully"); </script>';
            header("location:fac_profile.php");
        }
        else{
            echo '<script> alert("Try Again"); </script>';

        }
    }


?>