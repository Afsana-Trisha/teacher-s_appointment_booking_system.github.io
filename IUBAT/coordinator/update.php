<?php
   include "connect.php";
   $id=$_GET['updateid'];
   if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
      $date = $_POST['date'];
      $room = $_POST['room'];
      
   
      $update = mysqli_query($conn, "UPDATE `contact` set id='$id',name='$name', dept='$dept', date='$date', room='$room'");
   
      if($update){
         ?>
   <script type="text/javascript">
               alert("Data updated Successfully");
            </script>
   <?php
      }else{
         ?>
   <script type="text/javascript">
               alert("Data updating Failed");
            </script>
   <?php
   
         

      }
   
   }
?>