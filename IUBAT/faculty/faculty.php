<?php
	include "connect.php";
	include "navbar.php";

?>

<!DOCTYPE html>
<html>
	<style type="text/css">
		body{
			text-align: center;
			font-size: 1.5rem;
			color: var(--black);
			text-transform:uppercase ;
			margin-bottom: 3rem;
		}
		.srch
		{
			padding-left: 1000px; 
			margin-right:20px;
			margin-top: 150px;
		}
		.btn{
			width: 40%;
			font-size: 1.4rem;
			background-color: #90c5f9;
			
		}
		
	</style>

<body>

	<!--_____________________________search bar_______________________________________________________________________________-->

<div class="srch">
	<form class="navbar-form" method="post" name="form1">
		
			<input class="form-control" type="text" name="search" placeholder="search for Faculty" required=""><br>
			<button style="background-color:#90c5f9; " type="submit" name="submit" class="btn">
				<span ><i class="fa-solid fa-magnifying-glass"></i></span>
			</button>
		
		
	</form>
</div>
	<h2 style="text-align: center; color: #0d5071 ;">
		<b> List of Faculty of CSE department <br> <br></b>
	</h2>
<!-------------------------------------------------------php------------------------------------------------>     

<?php

if(isset($_POST['submit']))
		{
			$q=mysqli_query($conn,"SELECT * from faculty where fa_name like '%$_POST[search]%' ");
			
			
			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! Faculty name is invalid. Try again.";
			}
						
			else if(mysqli_num_rows($q)==1)
			{
				echo "<table class='table table-bordered table-hover'>";
					echo "<tr style='background-color: #90c5f9;'>";

						//table header
							echo "<th>";  echo "ID";   echo "</th>";
							echo "<th>";  echo "Name";   echo "</th>";
							echo "<th>";  echo "Department";   echo "</th>";
							echo "<th>";  echo "Email";   echo "</th>";
							echo "<th>";  echo "Room No";   echo "</th>";
							echo "<th>";  echo "Schedule";   echo "</th>";
				echo "</tr>";

				while($row=mysqli_fetch_assoc($q))
				{
					echo "<tr>";
						echo "<td>";echo $row['s_id'];echo "</td>";
						echo "<td>";echo $row['fa_name'];echo "</td>";
						echo "<td>";echo $row['fa_dept'];echo "</td>";
						echo "<td>";echo $row['fa_email'];echo "</td>";
						echo "<td>";echo $row['fa_room'];echo "</td>";
						?>
						<td><a class='btn btn-primary btn-lg'  href="schedule.php">Send</a></td>
						<?php
						echo "</tr>";
				}
				echo "<table>";
			
		}
		
			/*if(mysqli_num_rows($r)==0)
			{
				echo "Sorry! Destination is invalid. Try again.";
			}*/

		}
			/*if button is not pressed.......................*/
		else
		{
			$res=mysqli_query($conn,"SELECT * FROM `faculty` ORDER BY `faculty`.`s_id` ASC;");

			echo "<table class='table table-bordered table-hover'>";
			echo "<tr style='background-color: #90c5f9;'>";

				//table header
							echo "<th>";  echo "ID";   echo "</th>";
							echo "<th>";  echo "Name";   echo "</th>";
							echo "<th>";  echo "Department";   echo "</th>";
							echo "<th>";  echo "Email";   echo "</th>";
							echo "<th>";  echo "Room No";   echo "</th>";
							echo "<th>";  echo "Schedule";   echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
					echo "<td>";echo $row['s_id'];echo "</td>";
					echo "<td>";echo $row['fa_name'];echo "</td>";
					echo "<td>";echo $row['fa_dept'];echo "</td>";
					echo "<td>";echo $row['fa_email'];echo "</td>";
					echo "<td>";echo $row['fa_room'];echo "</td>";
					?>
					<td><a class='btn btn-primary'  href="schedule.php">View</a></td>
					<?php
					echo "</tr>";
			}
			echo "<table>";
		}


?>

<!-------------------------------------------------------php------------------------------------------------>     





 <div class="footer">

        
       
     
<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>
</div>
<script src="script.js"></script>

</body>
</html>