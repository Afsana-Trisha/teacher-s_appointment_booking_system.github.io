<?php
   include "connect.php";
   include "navbar.php";
?>


<!DOCTYPE html>
<html lang="en">
   <style type="text/css">
    .reg
    {
        margin-top: 20px;
    background-image: url(img/asq.jpg);
    height: 900px;
    }
    .footer{
        margin-top: -20px;
        background-color: lavender;
        height: 80px;
      }

</style>


<body>
    <section class="reg" id="reg">
        <div class="container">
            <h1 style="color:rgb(255, 255, 255); text-align: center; margin-top: 50px;">Faculty Registration Form</h1><br>
            <form action="" method="post">
               <b><span>your user id :</span></b>
                <input type="varchar" name="fa_id" placeholder="enter your user Id" class="box" required>
                
                <b><span>your name :</span></b>
                <input type="text" name="fa_name" placeholder="enter your name" class="box" required>
                <b><span>your department :</span></b>
                <input type="text" name="fa_dept" placeholder="enter your department name" class="box" required>
                
                <b><span>your Email :</span></b>
                <input type="email" name="fa_email" placeholder="enter your email address" class="box" required>
               
                <b><span>your Room No. :</span></b>
                <input type="number" name="fa_room" placeholder="enter your room no." class="box" required>
                <b><span>your Password :</span></b>
                <input type="password" name="fa_pass" placeholder="enter your password" class="box" required>
                <input type="submit" value="Sign Up" name="submit" class="link-btn" >
            </form>  
                 
              </div>
     
           </div>
     
        </div>
     </section>
     <div class="footer">

        
       
     
        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>
        </div>
<!-------------------------------------------------------php------------------------------------------------>     
<?php

if(isset($_POST['submit'])){
   $count=0;
   $sql="SELECT fa_id from faculty";
	$res=mysqli_query($conn,$sql);

   $fa_name = mysqli_real_escape_string($conn, $_POST['fa_name']);
   $fa_id = mysqli_real_escape_string($conn, $_POST['fa_id']);
   $fa_email = $_POST['fa_email'];
   $fa_dept = $_POST['fa_dept'];
   $fa_room = $_POST['fa_room'];
   $fa_pass = $_POST['fa_pass'];
   

   while($row=mysqli_fetch_assoc($res))
				{
					if($row['fa_id']==$_POST['fa_id'])
					{
						$count++;
					}
				}

   
   if($count==0)
		{
            $insert = mysqli_query($conn, "INSERT INTO `faculty`(fa_id, fa_name, fa_dept, fa_email, fa_room, fa_pass) VALUES('$fa_id','$fa_name','$fa_dept','$fa_email','$fa_room','$fa_pass')") or die('query failed');

            if($insert){
?>

<script type="text/javascript">
				alert("Registration Successful");
            window.location="fac_login.php"
</script>
<?php
   }
}
   else{
      ?>
<script type="text/javascript">
				alert("Registration Failed. ID already exists.");
</script>
<?php
   }


}
?>
<!-------------------------------------------------------php------------------------------------------------>     








     <script src="script.js"></script>
</body>

</html>