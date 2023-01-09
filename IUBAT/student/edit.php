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
    <title>Update Profile</title>
    <style>
        .wrapper{
            width: 600px;
            height: 400px;
            margin : 60px auto;
            background-color: pink;
            
            color: black;
            padding : 25px 15px;
            align-items: center;
            text-align:center;
        }
        body{
            background-image: url(img/w1.jpg);
            
        }
        .form-control{
            font-size: 1.5rem;
            height: 50px;
        }
/* CSS */
            .button-62 {
            background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
            border: 0;
            border-radius: 12px;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 2.5;
            outline: transparent;
            padding: 0 1rem;
            text-align: center;
            text-decoration: none;
            transition: box-shadow .2s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            }

            .button-62:not([disabled]):focus {
            box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
            }

            .button-62:not([disabled]):hover {
            box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
            }
    </style>
</head>
<body>
<?php
    
?>
<section class="contact" id="contact">
        <h3 style="color:black; margin-top: 40px;" class="heading">Update Profile</h3>
        <form action="" method="post">
        <b><span>Student ID :</span></b>
           <input type="number" name="st_id" value="<?php echo $_SESSION['login_user']  ?>" class="box" required>
           <b><span>your name :</span></b>
                <input type="text" name="name" placeholder="enter your name" class="box" required>
               
                <b><span>your Email :</span></b>
                <input type="email" name="email" placeholder="enter your email address" class="box" required>
                <b><span>your department :</span></b>
                <input type="text" name="dept" placeholder="enter your department name" class="box" required>
                <b><span>your Password :</span></b>
                <input type="password" name="password" placeholder="enter your password" class="box" required>
                <input type="submit" value="Update" name="update1" class="link-btn" >
        </form>  
</section>
     
            </div>       
           
        </div>
     </section>
</body>
<?php
		if(isset($_POST['update1']))
		{
           
			if(mysqli_query($conn,"UPDATE `student` SET name='$_POST[name]', st_id='$_SESSION[login_user]', email='$_POST[email]', dept='$_POST[dept]', password='$_POST[password]' ; "))
			{
				?>
				<script type="text/javascript">
					alert("Your Profile Updated Successfully.");
                    window.location="st_profile.php"
				</script>

				<?php
			}
            else{
                ?>
				<script type="text/javascript">
					alert("Try Again.");
				</script>

				<?php
            }
		}

	?>
</html>