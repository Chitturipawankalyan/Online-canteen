<!DOCTYPE html>	
<html>
<head>
	<title>Sign Up form</title>
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
			<form class="mt-5 p-5" style="border:2px solid green;" action="123.php" method="post">
			 <h1 style="color: white"> Sign Up </h1>
			 <input type="text" name="name" class="form-control mt-3" placeholder="Name", required="">
			 <input type="text" name="usn" class="form-control mt-3" placeholder="Usn", required="">
			 <input type="email" name="email" class="form-control mt-3" placeholder="Email", required="">
			 <input type="number" name="phone_number" class="form-control mt-3" placeholder="Phone No", required="">
			 <input type="password" name="pass" class="form-control mt-3" placeholder="createnewpassword", required="">
			 <input type="password" name="cpass" class="form-control mt-3" placeholder="confirmpassword", required="">
		     <button type="submit" name="submit" class="btn btn-outline-success mt-5">REGISTER</button>
			</form>
	</div>	
</div>
</body>
</html>

