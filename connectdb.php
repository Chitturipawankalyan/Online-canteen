



<?php
session_start();
if (isset($_POST["submit"])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$Password = $_POST['password'];
	$servername = "localhost";
	$username = "sample";
	$password = "sample";
	$p=$_POST['pswrepeat'];
	if ($Password == $p) {
        $conn = mysqli_connect($servername, $username, $password ,$password);   
        ?>
        <script type="text/javascript">
        	window.alert("gfgf");
        </script>
        <?php 
	}
    if (!$conn)
		{
    		die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			echo "Connection Successful";
		}
		
		$query = "insert into register(fname,lname,email,password)values('$fname','$lname','$email','$Password')";
		if (mysqli_query($conn,$query)) {

			echo "Data Inseted Successful";
		}
		else
		{
			echo "Not Successful";
		}
}

?>