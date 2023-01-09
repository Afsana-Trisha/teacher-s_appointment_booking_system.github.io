<?php
   include "connect.php";
   include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
   <title>My Appointment</title>
   <style>
      .table{
         margin-top: 20px;
         font-size: 1.5rem;
         
      }
   </style>
</head>
<body>
<h2 style="color:black; margin-top: 100px; text-align:center;">My Appointment</h2>
<!-------------------------------------------------------php------------------------------------------------>     

<?php

         
         $res=mysqli_query($conn,"SELECT fa_name FROM faculty where fa_id='$_SESSION[login_user]' "); 
         
        // $r=mysqli_query($conn,"SELECT * FROM `contact` WHERE fa_id='$fa_id' ");
        // $sql="SELECT student.st_id,name,booking.fa_name,day,time,status
        // FROM student INNER JOIN booking ON student.st_id=booking.st_id 
        //INNER JOIN faculty ON booking.fa_name=faculty.fa_name WHERE booking.status = '' ";

         $sql="SELECT * FROM booking inner join faculty ON booking.fa_name =faculty.fa_name inner join student ON booking.st_id=student.st_id where faculty.fa_id='$_SESSION[login_user]' and booking.status='Accepted' ";
         $r=mysqli_query($conn, $sql);
         
         if(mysqli_num_rows($res)==0)
         {
            echo "No Appointment Found";
         }
         
         else
         {
           // $r=mysqli_query($conn, "SELECT * FROM contact WHERE fa_id='$fa_id' ");
           $ab="SELECT sol/ref FROM booking WHERE sol/ref = '' ";
           $rt=mysqli_query($conn,"SELECT fa_name from `faculty` WHERE fa_id='$_SESSION[login_user]' ");
           
           $cd=mysqli_query($conn,$ab);
            echo "<table class='table table-bordered table-hover' style='text-align: center;'>";
            echo "<tr style='background-color: #90c5f9;'>";
               //table header
                        echo "<th>";  echo "ID";   echo "</th>";
                        echo "<th>";  echo "Student name";   echo "</th>";
                        echo "<th>";  echo "Student ID";   echo "</th>";
                        echo "<th>";  echo "Day";   echo "</th>";
                        echo "<th>";  echo "Time";   echo "</th>";
                        echo "<th>";  echo "Status";   echo "</th>";
                        
                        echo "<th>";  echo "Action";   echo "</th>";
                       
                       
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($r))
            {
               echo "<tr>";
                  echo "<td>";echo $row['sl'];echo "</td>";
                  echo "<td>";echo $row['name'];echo "</td>";
                  echo "<td>";echo $row['st_id'];echo "</td>";
                  echo "<td>";echo $row['day'];echo "</td>";
                  echo "<td>";echo $row['time'];echo "</td>";
                  echo "<td>";echo $row['sol/ref'];echo "</td>";

                  ?>
                 
                  <td>
                  <form action="" method="POST" style="display:inline-block;" id="myBtn" >
                     <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                     <input type="submit" name="solve" value="Mark as Solved" class="btn btn-success" style="font-size:1.5rem; margin-left: 20px;">
                  </form>
                  <form action="refer.php" method="POST" style="display:inline-block;" id="myBtn" >
                     <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                     <input type="hidden" name="name" value="<?php echo $row['name'] ?>" >
                     <input type="hidden" name="st_id" value="<?php echo $row['st_id'] ?>" >
                     <input type="submit" name="refer" value="Refer" class="btn btn-warning" style="font-size:1.5rem;  margin-left: 20px;">
                  </form>
               </td>
               
                  <?php
                  
                  echo "</tr>";
                  if(isset($_POST['solve']))
                  {
                     if(isset($_SESSION['login_user']))
                     {
                        
                        mysqli_query($conn,"UPDATE `booking` SET `sol/ref` = 'Marked as Solved' WHERE sl = '$_POST[sl]' ");
                        ?>
                           <script > 
                            alert("Updated Successfully.");
                              window.location="fac_schedule.php";
                             
                              
                        </script>
                       

                        <?php
                     }
                     else
                     {
                        ?>
                           <script type="text/javascript">
                              alert("Try Again.")
                           </script>
                        <?php
                     }
                  }
                  else if(isset($_POST['refer'])){
                     if(isset($_SESSION['login_user']))
                     {
                       
                        
                        mysqli_query($conn,"UPDATE `booking` SET `sol/ref` = 'Referred' WHERE sl = '$_POST[sl]' ");
                        ?>
                           <script> 
                            alert("Updated Successfully.");
                              window.location="refer.php";
                        </script>
                        <?php
                     }
                     else
                     {
                        ?>
                           <script type="text/javascript">
                              alert("Try Again.")
                           </script>
                        <?php
                     }
                  }
                  
            }
            echo "<table>";
         
            
         }

        
        
 
   
?>

<!-------------------------------------------------------php------------------------------------------------>

</body>
</html>