<?php
   include "connect.php";
   include "navbar.php";
  
?>


<!DOCTYPE html>
<html lang="en">
<style type="text/css">
   <style>
 
   
   .schedule{
      font-size: 1.4rem;
      
   }
  
        .about{
            background-image: url(img/w3.jpg);
        }
        .schedule{
            background-image: url(img/85.jpg);
            min-height: 800px;
        }
        .contact{
            background-image: url(img/w5.jpg);
        }
        .btn{
			width: 100%;
			font-size: 1.4rem;
			background-color: #90c5f9;
			
		}
        .proimg{
            height: 200px;
            width: 200px;
            align-items: center;
        }
        .wrapper{
            margin: 0 auto;
            margin-top: 80px;
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
         
         .button-90 {
  color: #fff;
  padding: 15px 25px;
  border-radius: 100px;
  background-color: #4C43CD;
  background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
  font-weight: bold;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;

  cursor: pointer;
}

.button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}



          </style>

<body>



<section class="schedule" id="schedule">
<h3 style="color:black; margin-top: 40px;" class="heading">Free Schedule</h3>
<!-------------------------------------------------------php------------------------------------------------>     

<?php

         $fa_name= $_GET['fa_name'];
         $res=mysqli_query($conn,"SELECT fa_id FROM faculty where fa_name='$fa_name' "); 
         
        // $r=mysqli_query($conn,"SELECT * FROM `contact` WHERE fa_id='$fa_id' ");
         $sql="SELECT * FROM contact inner join faculty ON contact.fa_id = faculty.fa_id WHERE faculty.fa_name = '$fa_name' ";
         $r=mysqli_query($conn, $sql);
         
         if(mysqli_num_rows($res)==0)
         {
            echo "No Free Schedule Found";
         }
         
         else
         {
           // $r=mysqli_query($conn, "SELECT * FROM contact WHERE fa_id='$fa_id' ");
          
           ?>
               <h2 style="text-align:center;">
               <button class="button-89" role="button"><?php
                  echo $fa_name;
                  ?></button>

                  
                  <br> <br>
               </h2>
           <?php
            echo "<table class='table table-bordered table-hover' style='text-align: center;'>";
            echo "<tr style='background-color: #90c5f9;'>";
               //table header
                        echo "<th>";  echo "ID";   echo "</th>";
                        echo "<th>";  echo "Day";   echo "</th>";
                        echo "<th>";  echo "From";   echo "</th>";
                        echo "<th>";  echo "To";   echo "</th>";
                        echo "<th>";  echo "Room No";   echo "</th>";
                        echo "<th>";  echo "Operations";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($r))
            {
               echo "<tr>";
                  echo "<td>";echo $row['id'];echo "</td>";
                  echo "<td>";echo $row['day'];echo "</td>";
                  echo "<td>";echo $row['s_time'];echo "</td>";
                  echo "<td>";echo $row['f_time'];echo "</td>";
                  echo "<td>";echo $row['room'];echo "</td>";
                  ?>
                  <td>
                     <form action="form.php" method="post" style="display:inline-block;">
                        <input type="hidden" name="day" value="<?php echo $row['day'] ?>" >
                        <input type="hidden" name="s_time" value="<?php echo $row['s_time'] ?>" >
                        <input type="hidden" name="room" value="<?php echo $row['room'] ?>" >
                        <input type="hidden" name="fa_name" value="<?php echo $fa_name ?>" >
                        <input type="submit" name="book" value="Book" class="btn btn-primary" style="font-size:1.5rem; margin-left: 20px;">
                     </form>
                     
                  </td>
               
                  <?php
                  echo "</tr>";
            }
            echo "<table>";


           


         if(isset($_POST['book']))
            {
               if(isset($_SESSION['login_user']))
               {
              
                 
                  /************************************************************ */
                  ?>

                  
                     <script type="text/javascript">
                        
                        window.location="form.php";
                     </script>
                  <?php
               }
               else
               {
                  ?>
                     <script type="text/javascript">
                        alert("Try Again.")
                     </script>
                  <?php
               }
            }
         }
 
        
 
   
?>

<!-------------------------------------------------------php------------------------------------------------>
</section>

</body>



<footer>

 <div class="footer"> 
    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IUBAT.CSE</span>  </div>
</div>
</footer>
</html>