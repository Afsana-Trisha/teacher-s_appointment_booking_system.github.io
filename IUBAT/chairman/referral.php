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
		.services
		{
			
			margin-top: 50px;
		}
		.btn{
			width: 40%;
			font-size: 1.4rem;
			background-color: #90c5f9;
			
		}
		
	</style>

<body>
<section class="services" id="services">
   <h1 class="heading">Referred Student List</h1>


	<h2 style="text-align: center; color: #0d5071 ;">
		<b> Referred Student List <br> <br></b>
	</h2>
<!-------------------------------------------------------php------------------------------------------------>     

<?php


		
			$res=mysqli_query($conn,"SELECT * FROM `referral` WHERE ref='Chairman' ORDER BY `referral`.`status` ASC ;");
			if($res){

			echo "<table class='table table-bordered table-hover'>";
			echo "<tr style='background-color: #90c5f9;'>";

				//table header
                echo "<th>";  echo "sl";   echo "</th>";
                echo "<th>";  echo "Student ID";   echo "</th>";
                echo "<th>";  echo "Student Name";   echo "</th>";
                echo "<th>";  echo "Email";   echo "</th>";
                echo "<th>";  echo "Referred By";   echo "</th>";
                echo "<th>";  echo "Date";   echo "</th>";
                echo "<th>";  echo "Reason";   echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
                echo "<td>";echo $row['sl'];echo "</td>";
                echo "<td>";echo $row['st_id'];echo "</td>";
                echo "<td>";echo $row['st_name'];echo "</td>";
                echo "<td>";echo $row['st_email'];echo "</td>";
                echo "<td>";echo $row['referred_by'];echo "</td>";
                echo "<td>";echo $row['date'];echo "</td>";
                echo "<td>";echo $row['reason'];echo "</td>";
					echo "</tr>";
			}
			echo "<table>";
			}


?>

<!-------------------------------------------------------php------------------------------------------------>     


		</section>


 
<script src="script.js"></script>

</body>
<footer>
<div class="footer">
<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>
</div>
</footer>
</html>