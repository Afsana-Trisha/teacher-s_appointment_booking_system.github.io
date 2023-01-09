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


<body>

<section class="login" id="login">
    <h1 style="font-size: 3rem;color:black; text-align: center; margin-top:10px;margin-bottom:10px;">"Coordinator Profile"</h1>
   <br> <br>
        <div class="container">
            <div class="child">
                <br>
               <h1> Dr.Hasibur Rashid Chayon </h1>
                 <p style="font-size: 1.5rem;"> PhD (Malaysia), MSc (Greenwich, London)  <br> BSc in Computer (SUST)<br>
                 Room # 423   Ext # 166 <br>
                 E-mail : chayon@iubat.edu
                </p> <br>
                <br> <br> <h1><b>Associate Professor & Coordinator</h1></b>
             <h2><b>Department of Computer Science and Engineering </h2></b>
            </div> 
            <div class="child" id="img">
            <img src="img/hrc.jpg" alt="">
            
            </div>
        </div>
     </section>

</body>



 <div class="footer"> 
    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>
</div>

</html>