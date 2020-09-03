<?php
 session_start();
 if(!(isset($_SESSION['usn'])))
 {
   ?>
   <script type="text/javascript">
    window.open("index.php","_self");
   </script>
   <?php
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order info</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jq/jq.js"></script>
  <script src="popper/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
       body{
         background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/yampa.jpg");
         height: 100vh;
         background-size: cover;
         background-position: center;
          }
    </style>
</head>
<body>
  <header style="text-align: right">
  <a href="home.php"><button type="home" class="btn btn-danger mt-3">HOME</button></a>
</header>
  <h1 style="text-align: center; color: white"><big>Order details</big></h1>       
<?php 
 $conn = mysqli_connect("localhost", "project", "project","project");
  //if (isset($_POST['submit'])) 
  //{
    $sql = " SELECT hotelid,Coffee,Tea,Boost,Time,Date FROM yampao WHERE customerid = $_SESSION[usn] ";
    $result=$conn->query($sql);
    if (mysqli_query($conn,$sql)) 
    {
      echo "comnn";
    }
    else
    {
      echo "ERROR: couldn't able to log in $sql.".mysqli_error($conn);
    }
    $run=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
 ?>
      <script>
        window.alert('invalid entry');
        window.open('orderdetail.php','_self');
      </script>
 <?php
     }     
    else
     {
          $data = mysqli_fetch_assoc($run);
          $id = $data['hotelid'];
         
          if ($id == "YAMPA") {
  ?>
  <div class="container">            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Hotel Name</th>
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
         while($row = $result->fetch_assoc())  
         {
         ?>
          <tr>
         <td><?php echo $row['hotelid']; ?></td>
         <td><?php echo $row['Coffee']; ?></td>
         <td><?php echo $row['Tea']; ?></td>
         <td><?php echo $row['Boost'];?> </td>
         <td><?php echo $row['Time'];?> </td>
         <td><?php echo $row['Date'];?> </td>
         <td><?php echo ($row['Coffee']+$row['Tea']+$row['Boost'])*10;?> </td>
         </tr>
         <?php
        }  
      
?>
    </tbody>
  </table>
</div>
     <?php
      }
     }
  ?>
  <?php 
    $sql = " SELECT hotelid,Coffee,Tea,Boost,Time,Date FROM nescafe WHERE customerid = $_SESSION[usn] ";
    $result=$conn->query($sql);
    if (mysqli_query($conn,$sql)) 
    {
      echo "comnn";
    }
    else
    {
      echo "ERROR: couldn't able to log in $sql.".mysqli_error($conn);
    }
    $run=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
 ?>
      <script>
        window.alert('invalid entry');
        window.open('orderdetail.php','_self');
      </script>
 <?php
     }     
    else
     {
          $data = mysqli_fetch_assoc($run);
          $id = $data['hotelid'];
         
          if ($id == "Nescafe") {
  ?>
  <div class="container">            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Hotel Name</th>
         <th>Mango ms</th>
        <th>Burger</th>
        <th>Sandwich</th>
        <th>Time</th>
        <th>Date</th>
        <th>Total price</th>
        </tr>
    </thead>
    <tbody>
         <?php 
         while($row = $result->fetch_assoc())  
         {
         ?>
          <tr>
         <td><?php echo $row['hotelid']; ?></td>
         <td><?php echo $row['Mango ms']; ?></td>
         <td><?php echo $row['Burger']; ?></td>
         <td><?php echo $row['Sandwich'];?> </td>
         <td><?php echo $row['Time'];?> </td>
         <td><?php echo $row['Date'];?> </td>
         <td><?php echo ($row['Mango ms']+$row['Burger']+$row['Sandwich'])*30;?> </td>
         </tr>
         <?php
        }  
      
?>
    </tbody>
  </table>
</div>
     <?php
      }
     }
  ?>
</body>
</html>
