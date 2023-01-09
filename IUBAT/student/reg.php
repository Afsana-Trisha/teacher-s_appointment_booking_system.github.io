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
            <h1 style="color:rgb(255, 255, 255); text-align: center; margin-top: 50px;">Student Registration Form</h1><br>
            <form action="" method="post">
                <b><span>your name :</span></b>
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <b><span>your ID :</span></b>
                <input type="number" name="st_id" placeholder="enter your id" class="box" required>
                <b><span>your Email :</span></b>
                <input type="email" name="email" placeholder="enter your email address" class="box" required>
                <b><span>your department :</span></b>
                <input type="text" name="dept" placeholder="enter your department name" class="box" required>
                <b><span>your Password :</span></b>
                <input type="password" name="password" placeholder="enter your password" class="box" required>
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
   $sql="SELECT st_id from student";
	$res=mysqli_query($conn,$sql);

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $st_id = mysqli_real_escape_string($conn, $_POST['st_id']);
   $email = $_POST['email'];
   $dept = $_POST['dept'];
   $password = $_POST['password'];
   

   while($row=mysqli_fetch_assoc($res))
				{
					if($row['st_id']==$_POST['st_id'])
					{
						$count++;
					}
				}

   
   if($count==0)
		{
            $insert = mysqli_query($conn, "INSERT INTO `student`(name, st_id, email, dept, password) VALUES('$name','$st_id','$email','$dept','$password')") or die('query failed');

            if($insert){
?>

<script type="text/javascript">
				alert("Registration Successful");
            window.location="login.php"
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