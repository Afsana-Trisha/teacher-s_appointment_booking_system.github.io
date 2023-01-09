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
        $st_name=$_POST['name'];
        $st_id=$_POST['st_id'];
        $sl=$_POST['sl'];
        $qw="UPDATE `booking` SET `sol/ref` = 'Referred' WHERE sl = '$sl' ";
        $fa="SELECT fa_name FROM `faculty` WHERE fa_id= '$_SESSION[login_user]' ";
        $sa="SELECT * FROM `student` WHERE st_id= '$st_id' ";
        $nk=mysqli_query($conn,$fa);
        $sk=mysqli_query($conn,$sa);
        $skop=mysqli_query($conn,$qw);
        if(mysqli_num_rows($nk)!=0)
         {
            
            while($row=mysqli_fetch_assoc($nk))
            {
                $tp=$row['fa_name'];
            }
         }
         if(mysqli_num_rows($sk)!=0)
         {
            
            while($row=mysqli_fetch_assoc($sk))
            {
                $sp=$row['email'];
                $si=$row['st_id'];
                $sn=$row['name'];
            }
         }
        
    ?>

<section class="contact" id="contact">
<h2 style="color:black; margin-top: 20px; margin-bottom: 20px; text-align:center;">Refer a student to Chairman/Coordinator</h2>
        <form action="" method="post">

           <b><span>Refer to  :</span></b>
           <input type="varchar" name="ref" Placeholder="Enter Chairman/Coordinator" class="box" required>
           <b><span>Student Name :</span></b>
           <input type="varchar" name="name" value="<?php echo $sn ?>" class="box" required>
           <b><span>Student ID:</span></b>
           <input type="number" name="id" value="<?php echo $si ?>" class="box" required>
           <b><span>Student Email:</span></b>
           <input type="email" name="email" value="<?php echo $sp ?>" class="box" required>
           <b><span>Referred By:</span></b>
           <input type="varchar" name="teacher" value="<?php echo $tp ?>" class="box" required>
           <b><span>Date:</span></b>
           <input type="date" name="date" value="<?php echo date("Y-m-d")  ?>" class="box" required>
           <b><span>Reason of Referral :</span></b>
           <input type="varchar" name="reason" class="box" required>
           
           <input type="submit" value="Update" name="update1" class="link-btn" >
        </form>  
</section>
     <?php
    if(isset($_POST['update1']))
    {
        
        mysqli_query($conn,"INSERT INTO `referral` VALUES('','$_POST[ref]','$_POST[id]','$_POST[name]','$_POST[email]','$_POST[teacher]','$_POST[date]','$_POST[reason]');");
        ?>
<script type="text/javascript">
               alert("Data inserted Successfully");
               window.location="fac_schedule.php";
            </script>


<?php
    }


?>
            </div>       
           
        </div>
     </section>
</body>
</html>