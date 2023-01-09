<?php
   include "connect.php";
   include "navbar.php";

   ?>


<!DOCTYPE html>
<html lang="en">
<head>

   <style type="text/css">
    
    .login
    {
        margin-top: 50px;
    background-image: url(img/bas.jpg);
    height: 600px;
    }
    .footer{
        margin-top: -20px;
        background-color: lavender;
        height: 80px;
      }
      
  .container{
    display:flex;
    column-gap: 10px;
  }
  div.child{
    float: left;
    width: 50%;
    box-sizing: border-box;
    text-align: center;
    padding: 10px;
    border-radius:.5rem;
}
.child img{
    width: 50%;
    height: auto;
    border-radius: 100rem;
}
</style>

</head>

<body>
    <section class="login" id="login">
    <h1 style="font-size: 3rem;color:black; text-align: center; margin-top:30px;margin-bottom:10px;">Chairman Login Form</h1>

        <div class="container">
            <div class="child">
                <form action="" method="post">
                <b><span>Chairman ID :</span></b>
                <input type="varchar" name="ch_id" placeholder="enter your id" class="box" required>
                <b><span>Chairman Password :</span></b>
                <input type="password" name="ch_pass" placeholder="enter your password" class="box" required>
                <input type="submit" value="Submit" name="submit" class="link-btn" >
                <u><b><a href="update_password.php" style="font-size:1.7rem; align-items: center;">Forgot Password?</a></b></u>

                </form> 
            </div> 
            <div class="child" id="img">
            <img src="img/ccc.jpg" alt="">
            <h1><b> Sign in as Chairman</b></h1>
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
   $ch_id = mysqli_real_escape_string($conn, $_POST['ch_id']);
   $count=0;
   $res=mysqli_query($conn,"SELECT * FROM `chairman` WHERE ch_id='$_POST[ch_id]' && ch_pass='$_POST[ch_pass]';");
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
      <div class="alert alert-danger" style="width:700px; margin-left: 320px; margin-top: -620px; color:#ff120d;text-align: center;font-size: 15px;">
         <strong>
            The id and password doesn't match.
         </strong>
      </div>
      <?php
   }
   else
   {
      $_SESSION['login_user']=$_POST['ch_id'];
      ?>
         <script type="text/javascript">
            window.location="chair_profile.php"
         </script>
         
      <?php
   }

}

?>
<!-------------------------------------------------------php------------------------------------------------>     


     <script src="script.js"></script>
</body>

</html>