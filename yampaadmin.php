<?php 
		$username = "project";
		$password = "project";	
		$conn = mysqli_connect('localhost', $username, $password,$username);
		if (!$conn)
		{
    		die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			//echo "Connection Successful";
		}

		$sql="SELECT * FROM yampao order by Date,Time";
		$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ONLINE CANTEEN SERVICE</title>
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
  <header style="text-align: right;">
   <a href="adminlogin.php"><button type="LOGIN" class="btn btn-outline-warning mt-3">LOGOUT</button></a>
  </header>
  <h2 style="text-align: center; color: white">YAMPA ORDERS</h2>
  <br><br>
  <h4 style="text-align: center; color: white">UPCOMING ORDERS</h4>
	<div class="container">            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>USN</th>
         <th>Coffee</th>
        <th>Tea</th>
        <th>Boost</th>
        <th>Time</th>
        <th>Date</th>
       <th>Total price</th> 
      </tr>
    </thead>
    <tbody>
      	 <?php
         $sql="SELECT * FROM yampao order by Date,Time";
         $result=$conn->query($sql); 
      	 while($row = $result->fetch_assoc())  
      	 {
          $d1 = date("o-m-d");
          if($d1 <= $row['Date'])
          {

      	 	?>
      	 	<tr>
    	   <td><?php echo $row['customerid']; ?></td>
    	   <td><?php echo $row['Coffee']; ?></td>
    	   <td><?php echo $row['Tea']; ?></td>
    	   <td><?php echo $row['Boost'];?> </td>
         <td><?php echo $row['Time'];?> </td>
          <td><?php echo $row['Date'];?> </td>
           <td><?php echo ($row['Coffee']+$row['Tea']+$row['Boost'])*10;?> </td>
    	   </tr>
    	   <?php
         }
    	  }	
      
?>
    </tbody>
  </table>
</div>
<br><br><br>
  <h4 style="text-align: center; color: white">OUTDATED ORDERS</h4>
  <div class="container">            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>USN</th>
         <th>Coffee</th>
        <th>Tea</th>
        <th>Boost</th>
        <th>Time</th>
        <th>Date</th>
       <th>Total price</th> 
      </tr>
    </thead>
    <tbody>
      <!--
         <?php 
         $sql="SELECT * FROM yampao order by Date,Time";
    $result=$conn->query($sql);
         while($row = $result->fetch_assoc())  
         {
          
          $d1 = date("o-m-d");
          if($d1 > $row['Date'])
          {

          ?>
          <tr>
         <td><?php echo $row['customerid']; ?></td>
         <td><?php echo $row['Coffee']; ?></td>
         <td><?php echo $row['Tea']; ?></td>
         <td><?php echo $row['Boost'];?> </td>
         <td><?php echo $row['Time'];?> </td>
          <td><?php echo $row['Date'];?> </td>
           <td><?php echo ($row['Coffee']+$row['Tea']+$row['Boost'])*10;?> </td>
         </tr>
         <?php
         }
        } 
      
?>
-->
    </tbody>
  </table>
</div>
</body>
</html>