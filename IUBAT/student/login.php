<?php
   include "connect.php";
   include "navbar.php";

?>


<!DOCTYPE html>
<html lang="en">
   <style type="text/css">
    .login
    {
        margin-top: 50px;
    background-image: url(img/bb.jpg);
    height: 600px;
    }
    .footer{
        margin-top: -20px;
        background-color: lavender;
        height: 80px;
      }

</style>

<body>
    <section class="login" id="login">
        <div class="container">
            <h1 style="color:rgb(255, 255, 255); text-align: center; margin-top: 50px;">Student Login Form</h1><br>
            <form action="" method="post">
               <b><span>your ID :</span></b>
               <input type="number" name="st_id" placeholder="enter your id" class="box" required>
               <b><span>your Password :</span></b>
               <input type="password" name="password" placeholder="enter your password" class="box" required>
               <input type="submit" value="Sign In" name="submit" class="link-btn" > <br> <br>
               
               <u><b><a href="update_password.php" style="font-size:1.7rem; align-items: center;">Forgot Password?</a></b></u>
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

if(isset($_POST['submit']))
{
   $st_id = mysqli_real_escape_string($conn, $_POST['st_id']);
   $count=0;
   $res=mysqli_query($conn,"SELECT * FROM `student` WHERE st_id='$_POST[st_id]' && password='$_POST[password]';");
   $row=mysqli_fetch_assoc($res);
   $count=mysqli_num_rows($res);

   if($count==0)
   {
      ?>
      <!--
         <script type="text/javascript">
            alert("The id and password doesn't match.");
         </script>
      -->
      <div class="alert alert-danger" style="width:700px; margin-left: 320px; margin-top: -600px; color:#ff120d;text-align: center;font-size: 15px;">
         <strong>
            The id and password doesn't match.
         </strong>
      </div>
      <?php
   }
   else
   {
      $_SESSION['login_user'] = $_POST['st_id'];
      
      ?>
         <script type="text/javascript">
            window.location="main.php"
         </script>
         
      <?php
   }

}

?>
<!-------------------------------------------------------php------------------------------------------------>     



     <script src="script.js"></script>
</body>

</html>