<?php
session_start();
/*if(!(isset($_SESSION['usn'])))
{
  ?>
  <script type="text/javascript">
    window.open("index.php","_self");
  </script>
  <?php
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>ONLINE CANSTEEN SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="jq/jq.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
      <a href="conn.php"><button type="LOGIN" class="btn btn-outline-warning mt-3">LOGOUT</button></a>
        <button type="CONTACT" class="btn btn-outline-success mt-3">CONTACT</button>
        <a href="order1.php"><button type="orders" class="btn btn-outline-primary mt-3">My orders</button></a>
  	</header>
  	<h1 style="text-align: center; color: white; margin-top: 15px;" >ONLINE CANTEEN SERVICE</h1>
  	<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>
<div class="container">
<div >
 <div class="card-columns">
  	<div class="container">
    <div class="card" style="width:400px">
    <img class="card-img-top rounded radius 10px" src="images/4.jpeg" alt="canteen image" style="width:100% height:70%">
    <div class="card-body">
      <h4 class="card-title">YAMPA</h4>
      <p class="card-text">Yashswini Milk Parlor</p>
      <a href="YAMPA.php" class="btn btn-primary stretched-link">See</a>
    </div>
  </div>
</div>

<div class="container" style="margin-left: 80%">
    <div class="card" style="width:400px">
    <img class="card-img-top rounded radius 10px" src="images/5.jpeg" alt="canteen image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">NESCAFE</h4>
      <p class="card-text">Near mech audi</p>
      <a href="Nescafe.php" class="btn btn-primary stretched-link">See</a>
    </div>
  </div>
 </div>
</div>

<div class="card-columns">
<div class="container">
    <div class="card" style="width:400px">
    <img class="card-img-top rounded radius 10px" src="images/6.jpeg" alt="canteen image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">MYLARI</h4>
      <p class="card-text">near golden jublee</p>
      <a href="Mylari.php" class="btn btn-primary stretched-link">See</a>
    </div>
  </div>
</div>

 <div class="container" style="margin-left: 80%;">
    <div class="card" style="width:400px">
    <img class="card-img-top rounded radius 10px" src="images/7.jpeg" alt="canteen image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">L.K. BURGER</h4>
      <p class="card-text">Near Yampa</p>
      <a href="MGburger.php" class="btn btn-primary stretched-link">See</a>
    </div>
  </div>
 </div>
</div>
</div>
</div>

</body>
</html>