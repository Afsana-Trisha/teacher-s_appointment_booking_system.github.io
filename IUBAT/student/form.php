<?php
   include "connect.php";
   include "navbar.php";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referral</title>
</head>
<body>
    <?php
        $day=$_POST['day'];
        $s_time=$_POST['s_time'];
        $fa_name=$_POST['fa_name'];
        $room=$_POST['room'];
        $fa="SELECT name FROM `student` WHERE st_id= '$_SESSION[login_user]' ";
        $nk=mysqli_query($conn,$fa);
        
        if(mysqli_num_rows($nk)!=0)
         {
            
            while($row=mysqli_fetch_assoc($nk))
            {
                $tp=$row['name'];
            }
         }
         
        
    ?>

<section class="contact" id="contact">
<h2 style="color:black; margin-top: 20px; margin-bottom: 20px; text-align:center;">Send Appointment Request to Faculty</h2>
        <form action="" method="post">
           
           
           <b><span>Student ID:</span></b>
           <input type="number" name="st_id" value="<?php echo $_SESSION['login_user'] ?>" class="box" required>
           <b><span>Faculty Name :</span></b>
           <input type="varchar" name="fa_name" value="<?php echo $fa_name ?>" class="box" required>
           <b><span>Day:</span></b>
           <input type="varchar" name="day" value="<?php echo $day ?>" class="box" required>
           <b><span>Time:</span></b>
           <input type="time" name="s_time" value="<?php echo $s_time ?>" class="box" required>
           <b><span>Date:</span></b>
           <input type="date" name="date" value="<?php echo date("Y-m-d")  ?>" class="box" required>
           <b><span>Room :</span></b>
           <input type="number" name="room" value="<?php echo $room ?>" class="box" required>
           <b><span>Reason for Appointment :</span></b>
           <input type="varchar" name="reason" placeholder="Enter your reason for booking" class="box" required>
           
           <input type="submit" value="Submit" name="submit" class="link-btn" >
        </form>  
</section>
     <?php
    if(isset($_POST['submit']))
    {
        
        mysqli_query($conn,"INSERT INTO booking Values('','$_SESSION[login_user]', '$fa_name','$_POST[day]','$_POST[s_time]','$_POST[date]','$_POST[room]','','','$_POST[reason]'); ");
        ?>
<script type="text/javascript">
               alert("Request has been sent");
               window.location="request.php";
            </script>


<?php
    }


?>
            </div>       
           
        </div>
     </section>
</body>
</html>