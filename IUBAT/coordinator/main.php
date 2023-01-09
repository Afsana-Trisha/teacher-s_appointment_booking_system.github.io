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
}
.welcome a:hover{
    box-shadow: inset 0 0 0 0 #fff;
    color: black;
    
}

</style>
</head>
<body>
<!---------------------header-------------------------->

<!---------------------------home------------------------------>
<section class="home" id="home">
   <div class="container">
      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left" id="quote">
            <h2><br><b>         
         &nbsp &nbsp "I put the relation of a fine teacher to a student just below the 
               relation of a mother to a son."</b> <br>  &nbsp &nbsp - <i> Thomas Wolfe </i>   &nbsp &nbsp</h2>
               <p>

               </p>
            
         </div>

      </div>

   </div>
</section>

<section class="about" id="about">

<div class="container">
   <div class="row align-items-center">
      <div class="col-md-6 image">
      <img src="img/ccc.jpg" class="w-100 mb-5 mb-md-0" alt="">
  
   </div>
   <div class="col-md-6 content">
      <span>about us</span>
      <h3>Smoother Educational Interaction Between Student and Faculty.</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
         Delectus minus officia qui enim nemo iure vero sapiente repellat, repellendus dolor. 
         Eveniet nobis sit exercitationem ipsa dignissimos quae delectus repudiandae optio..</p>
   </div>
</div>
</div>

</section>

<section class="services" id="services">
   <h1 class="heading">our services</h1>
   <div class="box-container container">
      <div class="box">
         <img src="img/iii.jpg" alt="">
          <!-- <i class="fa-solid fa-calendar-check"></i>-->
         <h3>Direct Appointment with faculty</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Eum, rem animi? Nostrum mollitia accusantium doloremque culpa ea dolores tenetur aperiam.</p>
      </div>
      <div class="box">
         <img src="img/op.webp" alt="">
        <!-- <i class="fa-solid fa-calendar-check"></i>-->
         <h3>Appointment with Coordinator and Chairman</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Eum, rem animi? Nostrum mollitia accusantium doloremque culpa ea dolores tenetur aperiam.</p>
      </div>
      <div class="box">
         <img src="img/in.jpg" alt="">
        <!-- <i class="fa-solid fa-calendar-check"></i>-->
         <h3>Easy Academic Interaction</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Eum, rem animi? Nostrum mollitia accusantium doloremque culpa ea dolores tenetur aperiam.</p>
      </div>
   </div>
</section>





<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+88 01714014933</p>
         <p>+88 01671-316688</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>4 Embankment Drive Road, Sector-10 (Off Dhaka-Ashulia Road)
            Uttara Model Town, Dhaka-1230.Bangladesh</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>08:00am to 05:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>cse@iubat.edu</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>

</section>








<script src="script.js"></script>
</body>
</html>