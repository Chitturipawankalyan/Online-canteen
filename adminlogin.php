<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<style>
       body{
         background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/bg.jpg");
         height: 100vh;
         background-size: cover;
         background-position: center;
          }
    </style>
</head>	
<body>
<div class="container">
	<div class="row justify-content-center" style="background-image: transparent;">
			<form class="mt-5 p-5" style="border:2px solid red;" method="post" action="adminhome.php">
			<h1 style="color: white"> Login	</h1>
			<input type="text" name="hotelid" class="form-control mt-5" placeholder="username", required="">
			<input type="password" name="password" class="form-control mt-5" placeholder="password", required="">
			<button type="submit" name="submit" class="btn btn-outline-success mt-5">Submit</button>
			</form>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
 $conn = mysqli_connect("localhost", "project", "project","project");
  if (isset($_POST['submit'])) 
  {
  	$usn = $_POST['hotelid'];
  	$password = $_POST['password'];
  	$query = "SELECT * FROM login WHERE hotelid = '$usn' AND password = '$password'";
  	if (mysqli_query($conn,$query)) 
  	{
  		echo "<h1> Connection success </h1>";
  	}
  	else
  	{
  		echo "ERROR: couldn't able to log in $query.".mysqli_error($conn);
  	}
  	$run=mysqli_query($conn,$query);
  	$row=mysqli_num_rows($run);
  	if($row<1)
  	{
 ?>
  		<script>
  			window.alert('invalid entry');
  			window.open('adminhome.php','_self');
  		</script>
 <?php
     }     
    else
     {
         	$data = mysqli_fetch_assoc($run);
         	$u_sn = $data['hotelid'];
        	$_SESSION["hotelid"] = $u_sn;
          if ($u_sn == 'YAMPA') 
          {
            header('location:yampaadmin.php'); 
          }
          elseif ($u_sn == 'NESCAFE') {
            header('location:Nescafeadmin.php');
          }
         	
     }

  	}
  ?>

