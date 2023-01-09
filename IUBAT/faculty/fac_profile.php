<?php
   include "connect.php";
   include "navbar.php";
  
   if(isset($_POST['submit'])){

      $fa_id = $_SESSION['login_user'];
      $day = mysqli_real_escape_string($conn, $_POST['day']);
      $s_time = $_POST['s_time'];
      $f_time = $_POST['f_time'];
      $room = $_POST['room'];
      
   
      $insert = mysqli_query($conn, "INSERT INTO `contact`( fa_id, day, s_time, f_time, room) VALUES('$fa_id','$day','$s_time','$f_time','$room')") or die('query failed');
   
      if($insert){
         ?>
   <script type="text/javascript">
               alert("Data inserted Successfully");
            </script>
   <?php
      }else{
         ?>
   <script type="text/javascript">
               alert("Data insertion Failed");
            </script>
   <?php
   
         

      }
   
   }
?>


<!DOCTYPE html>
<html lang="en">
<style type="text/css">
   .schedule{
      font-size: 1.5rem;
   }
  
        .about{
            background-image: url(img/w3.jpg);
        }
        .schedule{
            background-color: #f5f5f5 ;
        }
        .contact{
            background-image: url(img/w5.jpg);
        }
        .proimg{
            height: 200px;
            width: 200px;
            align-items: center;
        }
        .wrapper{
            margin: 0 auto;
            margin-top: 30px;
            width:400px;
            align-items: center;
        }
        h2{
            text-align: center;
        }
        #buttonx a{
         align-items: center;
    /* background-color: red; */
    /* justify-items: center; */
    /* align-items: flex-end; */
    display: inline-block;
    display: flex;
    /* align-items: center; */
    justify-content: center;
    margin: 10px auto;
    width: 50%;

        }

    .link_btn {
            width: 200px;
            margin: 0 auto;
            display: inline-block;
         }
                  
            .button-33 {
            background-color: #00c3e1;
            
            border-radius: 50%;
            box-shadow: rgba(191, 85, 236, .2) 0 -25px 18px -14px inset,rgba(191, 85, 236, .15) 0 1px 2px,rgba(191, 85, 236, .15) 0 2px 4px,rgba(191, 85, 236, .15) 0 4px 8px,rgba(191, 85, 236, .15) 0 8px 16px,rgba(191, 85, 236, .15) 0 16px 32px;
            color: purple;
            cursor: pointer;
            display: inline-block;
            font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            }

            .button-33:hover {
            box-shadow: rgba(191, 85, 236,.35) 0 -25px 18px -14px inset,rgba(191, 85, 236.25) 0 1px 2px,rgba(191, 85, 236,.25) 0 2px 4px,rgba(191, 85, 236,.25) 0 4px 8px,rgba(191, 85, 236,.25) 0 8px 16px,rgba(191, 85, 236,.25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
}
   
 </style>

<body>

<section class="about" id="about">
<div class="container" id="buttonx">
 		<form action="edit.php" method="post">

 			<button class="button-33" style="float:right; width: 70px; font-size: 20px;" name="submit1"> Edit </button>
 			
 		</form>
<div class="wrapper">
 			<?php
 				$q=mysqli_query($conn,"SELECT * FROM faculty where fa_id='$_SESSION[login_user]'; ");
 			?>
 			<h2 > My Profile</h2>
 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align:center;'>
                
                 <img class='img-circle profile-img' height=140 width=140 src='img/use.png'>
                
 					</div>";
 			
 			?>
 			<div style="text-align: center;font-size: 20px;">
 				<b >Welcome</b>
 				<h4>
 					<?php
 						echo $_SESSION['login_user'];
 					?>
 				</h4>
 			</div>
			<?php
			//echo "<b>";
				echo "<table class='table table-bordered' style='background-color:#21263c; color:white; font-size: 15px;'>";
					echo "<tr>";
						echo "<td>";
							echo "<b> Name: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['fa_name'];
						echo "</td>";
					echo "</tr>";
						

					echo "<tr>";
						echo "<td>";
							echo "<b> Faculty ID: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['fa_id'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> E-mail: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['fa_email'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Department: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['fa_dept'];
						echo "</td>";
					echo "</tr>";

               echo "<tr>";
						echo "<td>";
							echo "<b> Room No: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['fa_room'];
						echo "</td>";
					echo "</tr>";

					
				echo "</table>";
				//echo "</b>";
			?>
         
         
 		</div>
       <a href="#contact" class="link-btn">Upload Free Schedule</a>
      <a href="#schedule" class="link-btn">View Free Schedule</a>
       
</div>

</section>
<section class="contact" id="contact">
        <h3 style="color:black; margin-top: 40px;" class="heading">Free Schedule</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           
           <b><span>Day :</span></b>
           <input type="text" name="day" placeholder="enter week day e.g. Saturday" class="box" required>
            
           <b><span>Consultaion Starting Time :</span></b>
           <input type="time" name="s_time" class="box" required>
           <b><span>Consultaion Ending Time :</span></b>
           <input type="time" name="f_time" class="box" required>
           <b><span>Room No :</span></b>
           <input type="number" name="room" placeholder="enter your room number" class="box" required>
           <input type="submit" value="Submit" name="submit" class="link-btn" >
        </form>  
</section>

<section class="schedule" id="schedule">
<h3 style="color:black; margin-top: 40px;" class="heading">Free Schedule</h3>
<!-------------------------------------------------------php------------------------------------------------>     

<?php
	   if(isset($_SESSION['login_user']))
      {
        $q=mysqli_query($conn,"SELECT * from contact where fa_id='$_SESSION[login_user]' ; ");
            
         if(mysqli_num_rows($q)==0)
         {
            ?>
            <div style="text-align:center; font-size:2rem;">
               <?php
                  echo "Sorry! No Schedule Found.";
               ?>

            </div>
            <?php
         }
         else{

            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color: #90c5f9;'>";
         

               //table header
                        echo "<th>";  echo "ID";   echo "</th>";     
                        echo "<th>";  echo "Day";   echo "</th>";
                        echo "<th>";  echo "From";   echo "</th>";
                        echo "<th>";  echo "To";   echo "</th>";
                        echo "<th>";  echo "Room No";   echo "</th>";
                        echo "<th>";  echo "Operations";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
				   echo "<tr>";
					echo "<td>";echo $row['id'];echo "</td>";
					echo "<td>";echo $row['day'];echo "</td>";
					echo "<td>";echo $row['s_time'];echo "</td>";
               echo "<td>";echo $row['f_time'];echo "</td>";
					echo "<td>";echo $row['room'];echo "</td>";
               ?>
               <td>
                  <form action="delete.php" method="post" style="display:inline-block;">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                     <input type="submit" name="delete" value="Delete" class="btn btn-danger" style="font-size:1.5rem; margin-left: 20px;">
                  </form>
                  <form action="update.php" method="post"style="display:inline-block;">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                     <input type="hidden" name="room" value="<?php echo $row['room'] ?>" >
                     <input type="submit" name="Update" value="Update" class="btn btn-primary" style="font-size:1.5rem;  margin-left: 20px;">
                  </form>
               </td>
              
               <?php
					echo "</tr>";
			   }
			echo "<table>";
         }
      }
      
      else
      {
        
      echo "Please Login First";
 
      }
  



?>

<!-------------------------------------------------------php------------------------------------------------>
</section>

</body>





 <div class="footer"> 
    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>
</div>

</html>