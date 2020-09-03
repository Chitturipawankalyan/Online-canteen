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
			<form class="mt-5 p-5" style="border:2px solid green;" method="post" action="login.php">
			<h1 style="color: white"> Login	</h1>
			<input type="text" name="usn" class="form-control mt-5" placeholder="usn", required="">
			<input type="password" name="password" class="form-control mt-5" placeholder="password", required="">
			<button type="submit" name="submit" class="btn btn-outline-success mt-5">Submit</button>
			<br>
			<br>
			<br>
			<h5 style="color: white;">For new user please register!</h5>
			<a href="register.php" class="btn btn-outline-success mt-3">Register</a>
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
  	$usn = $_POST['usn'];
  	$password = $_POST['password'];
  	$query = "SELECT * FROM register WHERE usn = '$usn' AND password = '$password'";
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
  			window.open('login.php','_self');
  		</script>
    <?php
     }     
    else
     {
         	$data = mysqli_fetch_assoc($run);
         	$id = $data['name'];
         	$u_sn = $data['usn'];
         	echo "id".$id;

         	$_SESSION["name"] = $id;
         	$_SESSION["usn"] = $u_sn;
         	header('location:home.php'); 
     }

  	}
  ?>

