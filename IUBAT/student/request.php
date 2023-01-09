<?php
   include "connect.php";
   include "navbar.php";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Appointment</title>
    <style>
      body{
         background-image: url(img/bas.jpg);
         margin-top:150px;
      }
      h1{
        text-align: center;
        color: black;
        margin-top: -30px;

      }
      h2{
        text-align: center;
      }
      .table{
        background-color: #f5f5f5;
       font-size: 1.3rem;
      /* margin: 10px 30px 10px 30px;*/
       margin-right: 100px;
       text-align: center;
      }
      .table th{
        background-color: #3c7cbd;
        color: white;
        font-size: 1.5rem;
      }
   </style>
</head>
<body>
    <h1>Appointment Request List</h1> <br> <br>
    <?php
    if(isset($_SESSION['login_user']))
    {
        $q=mysqli_query($conn,"SELECT * from booking where st_id='$_SESSION[login_user]' ; ");
        

        if(mysqli_num_rows($q)==0)
        {
            ?>
                <h2><?php echo "Sorry! No Pending Request Found. Try again.";
                ?></h2>
            
            <?php
        }
                    
        else
        {

            echo "<table class='table table-bordered table-hover'>";
                echo "<tr style='background-color: #35dac7;'>";

                    //table header
                    echo "<th>";  echo "Day";   echo "</th>";
                    echo "<th>";  echo "Date";   echo "</th>";
                    echo "<th>";  echo "Status";   echo "</th>"; 
                    echo "<th>";  echo "Faculty Name";   echo "</th>";
                    echo "<th>";  echo "Time";   echo "</th>";
                    echo "<th>";  echo "Room No.";   echo "</th>";
                    echo "<th>";  echo "Action";   echo "</th>";

                echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
                echo "<tr>";
                    echo "<td>";echo $row['day'];echo "</td>";
                    echo "<td>";echo $row['date'];echo "</td>";
                    echo "<td>";echo $row['status'];echo "</td>";
                    echo "<td>";echo $row['fa_name'];echo "</td>";
                    echo "<td>";echo $row['time'];echo "</td>";
                    echo "<td>";echo $row['room'];echo "</td>";
                    echo "<td>";echo $row['sol/ref'];echo "</td>";
                   
                    
                echo "</tr>";
            }
            echo "<table>";
        
        }
        
    }
    else{
        
                 echo "Please Login First";
            
    }

    ?>
</body>
</html>