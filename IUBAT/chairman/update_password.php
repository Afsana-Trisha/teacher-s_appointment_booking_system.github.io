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
    <title>Update Password</title>
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
            background-image: url(img/upp.jpg);
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
<section class="login" id="login">
        <div class="container" >
            <div class="wrapper" >
                <h1> <br> Update Your Password &nbsp <i class="fa-solid fa-unlock"></i></h1> <br> <br>
                <form action="" method="post">
                <input type="varchar" name="ch_name" placeholder="Chairman Name" class="form-control" required=""> <br>

                <input type="varchar" name="ch_pass" placeholder="New Password" class="form-control" required=""> <br>
                <button class="button-62" type="submit" name="submit">Update Password</button>
                
            </form>
     
            </div>       
           
        </div>
     </section>
</body>
<?php
		if(isset($_POST['submit']))
		{
			if(mysqli_query($conn,"UPDATE `chairman` SET ch_pass='$_POST[ch_pass]' WHERE ch_name='$_POST[ch_name]' ; "))
			{
				?>
				<script type="text/javascript">
					alert("The Password Updated Successfully.");
                    window.location="chair.php"
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