<?php
	session_start();
    include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Teacher Appointment System</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
   <style type="text/css">
   .welcome a{
      box-shadow: inset 0 0 0 0 #fff;
      margin: 0 -.25rem;
      padding: 0 .25rem;
      transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
      font-weight: 700;
      text-shadow: 2px 2px 5px var(--blue);
}
.welcome a:hover{
    box-shadow: inset 0 0 0 0 #fff;
    color: black;
    
}

</style>

</head>

    <!---------------------header-------------------------->
<header class="header fixed-top">

<div class="container">

   <div class="row align-items-center justify-content-between">

      <a href="main.php" class="logo">Teacher <span>Appointment Booking </span>System</a>

      <?php
         if(isset($_SESSION['login_user']))
         {
            ?>
            

            <nav class="nav">
               <a href="main.php">Home</a>
               <a href="referral.php">Referral</a>
              <a href="fac_list.php">Faculty List</a>
               <a href="logout.php" style="color: green;">Sign Out</a>
               <div class="welcome">
                  <a href="coor_profile.php">
               
                  <?php
                     echo "Welcome ".$_SESSION['login_user'];
                  ?></a>
               </div>
            </nav>

            
      <?php
         }
         else{
      ?>
         <nav class="nav">
            <a href="main.php">Home</a>
            <a href="reg.php">Sign Up</a>
            <div class="dropdown">
               <a href="">Sign In<i class="fa fa-caret-down"></i></a>
               <div class="dropdown-content">
                  <a href="login.php">as Student</a><br>
                  <a href="coor.php">as Coordinator</a><br>
                  <a href="chair.php">as Chairman</a><br>
                  <a href="fac_login.php">as Faculty</a>
               </div>
            </div>
          
         </nav>
       <?php
         }
         
      ?>
      
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</div>

</header>
<!---------------------------home------------------------------>


</html>