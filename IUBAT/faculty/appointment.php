<?php
   include "connect.php";
   include "navbar.php";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Appointment</title>
    <style>
      body{
         background-image: url(img/cat.jpg);
         margin-top:150px;
      }
      h1{
        text-align: center;
        color: black;
        margin-top:-30px;
        text-decoration: underline;
      }
      h2{
        text-align: center;

      }
      .table{
        background-color: #f5f5f5;
       font-size: 1.3rem;
      /* margin: 10px 30px 10px 30px;*/
       margin-right: 100px;
       text-align: center;
      }
      .table th{
        background-color: #b81835;
        color: white;
        font-size: 1.5rem;
      }
      .button3 {
  background-color: var(--light-bg); 
  color: black; 
  border: 2px solid #b81835;
  padding: 3px;
  border-radius: 40px;
}
      .button3:hover {
  background-color: #f52d53;
  color: white;
}
   </style>
</head>
<body>

    <h1>Appointment Request List</h1> <br> <br>
    <?php

    if(isset($_SESSION['login_user']))
    {
        $sql="SELECT student.st_id,name,booking.fa_name,day,time,date,status,reason,sl FROM student INNER JOIN booking ON student.st_id=booking.st_id INNER JOIN faculty ON booking.fa_name=faculty.fa_name WHERE booking.status = '' and faculty.fa_id= '$_SESSION[login_user]' ";
        $res=mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)==0)
        {
            ?>
            <h2><?php echo "Sorry! No Pending Request Found. Try again.";
            ?></h2>
        
        <?php
        }
        else{
            echo "<table class='table table-bordered table-hover'>";
                echo "<tr style='background-color: #35dac7;'>";

                    //table header
                    echo "<th>";  echo "Day";   echo "</th>";
                    echo "<th>";  echo "Date";   echo "</th>";
                    echo "<th>";  echo "Status";   echo "</th>"; 
                    echo "<th>";  echo "Reason";   echo "</th>"; 
                    echo "<th>";  echo "Student Name";   echo "</th>";
                    echo "<th>";  echo "Student ID";   echo "</th>";
                    echo "<th>";  echo "Time";   echo "</th>";
                    echo "<th>";  echo "Request";   echo "</th>";

                echo "</tr>";

            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                    echo "<td>";echo $row['day'];echo "</td>";
                    echo "<td>";echo $row['date'];echo "</td>";
                    echo "<td>";echo $row['status'];echo "</td>";
                    echo "<td>";echo $row['reason'];echo "</td>";
                    echo "<td>";echo $row['name'];echo "</td>";
                    echo "<td>";echo $row['st_id'];echo "</td>";
                    echo "<td>";echo $row['time'];echo "</td>";
                    
                    ?>
					<td>
                    <form action="" method="post" style="display:inline-block;">
                        <input type="hidden" name="day" value="<?php echo $row['day'] ?>" >
                        <input type="hidden" name="st_id" value="<?php echo $row['st_id'] ?>" >
                        <input type="submit" name="Accept" value="Accept" class="button3" style="font-size:1.5rem; margin-left: 20px;">
                     </form>
                     <form action="" method="post" style="display:inline-block;">
                       
                        <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                        <input type="submit" name="Cancel" value="Cancel" class="button3" style="font-size:1.5rem; margin-left: 20px;">
                     </form>
                 
                  
              	 </td>
                  
					<?php
                    
                echo "</tr>";
                
                if(isset($_POST['Accept']))
                {
                
                  /*  $_SESSION['st_id']=$_POST['st_id'];
                    $_SESSION['day']=$_POST['day'];*/
                
                mysqli_query($conn,"UPDATE `booking` SET `status` = 'Accepted' WHERE st_id = '$_POST[st_id]' and day ='$_POST[day]'; ");
                
                
                ?>
                <script type="text/javascript">
                    alert("Updated Successfully.");
                    window.location="fac_schedule.php";
                </script>
                <?php
                }
                echo "</tr>";
                
                if(isset($_POST['Cancel']))
                {
                
                  /*  $_SESSION['st_id']=$_POST['st_id'];
                    $_SESSION['day']=$_POST['day'];*/
                
                mysqli_query($conn,"UPDATE `booking` SET `status` = 'Cancelled' WHERE sl = '$_POST[sl]' ; ");
                
                
                ?>
                <script type="text/javascript">
                    alert("Updated Successfully.");
                    window.location="request.php";
                </script>
                <?php
                }


            }
            echo "<table>";
                
                
        }
        
    }



    ?>

    
</body>
</html>