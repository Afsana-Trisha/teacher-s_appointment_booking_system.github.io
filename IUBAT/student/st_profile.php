<?php
    include "connect.php";
    include "navbar.php";

?>
<!DOCTYPE html>
<html lang="en">
    <title>User Profile</title>
    <style type="text/css">
        body{
            background-image: url(img/pur.jpg);
        }
        .proimg{
            height: 200px;
            width: 200px;
            align-items: center;
        }
        .wrapper{
            margin: 0 auto;
            margin-top: 100px;
            width:400px;
            align-items: center;
        }
        h2{
            text-align: center;
        }
        
.button-33 {
  background-color: #c2fbd7;
  
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
<div class="container">
 		<form action="edit.php" method="post">
		 <input type="hidden" name="st_id" value="<?php echo $_SESSION['login_user']?>" >
 			<button class="button-33" style="float:right; width: 70px; font-size: 20px;" name="submit1"> Edit </button>
 			
 		</form>
 		<div class="wrapper">
 			<?php
 				$q=mysqli_query($conn,"SELECT * FROM student where st_id='$_SESSION[login_user]'; ");
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
							echo $row['name'];
						echo "</td>";
					echo "</tr>";
						

					echo "<tr>";
						echo "<td>";
							echo "<b> Student ID: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['st_id'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> E-mail: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['email'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Department: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['dept'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Password: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['password'];
						echo "</td>";
					echo "</tr>";
				echo "</table>";
				//echo "</b>";
			?>
 		</div>
 	</div>


</body>
</html>