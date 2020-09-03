 <?php
  if(isset($_POST["submit"])) 
   {
   		$name=$_POST['name'];
   		$usn=$_POST['usn'];
   		$email=$_POST['email'];
   		$phone=$_POST['phone_number'];
   		$pass= $_POST['pass'];
		$servername = "localhost";
		$username = "project";
		$password = "project";
		if ($_POST['pass'] == $_POST ['cpass']) 
		{
			
		$conn = mysqli_connect($servername, $username, $password,$username);
		if (!$conn)
		{
    		die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			echo "Connection Successful";
		}
		$query= "insert into register (name,usn,email,phone,password)values('$name','$usn','$email','$phone','$pass')";
		if(mysqli_query($conn, $query))
		{
			echo "Data Inseted Successful";
			
?>
			<script>
			  window.alert("registeration Successful");
			  window.open("login.php","_self");
			</script>
<?php
        
		}
		else
		{
			?>
			<script >
			window.alert("registeration unsuccessfull");
			window.open("register.php","_self");
			</script>
<?php			
		}
		mysqli_close($conn);
	    }
	else
	{
		echo("registeration not possible");
	}
}
?>
 