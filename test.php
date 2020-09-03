<?php
session_start();
$_SESSION['hotelid']="YAMPA";
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
	<title>Yampa</title>
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
  <h1 style="text-align: center; color: white"><big>Yashaswini Milk Parlour</big></h1>
   <div class="container text-white">       
  <form class="mt-5 p-5" action ="demo.php" method="post">
     <div class="container" style="text-align: center; border: 2px solid red; padding: 40px;">
          <div class="row">
                <div class="col-sm-3">
                    <h5>SL.NO</h5>     
                </div>        
                <div class="col-sm-3">
                    <h5>Food Name</h5>     
                </div>
                <div class="col-sm-3">
                    <h5>Quantity</h5>     
                </div>
                <div class="col-sm-3">
                    <h5>Price</h5>     
                </div>
          </div><br>
        <div class="row">
          <div class="col-sm-3">
            <h5>1</h5>
          </div>
          <div class="col-sm-3">
            <h5>Tea</h5>
          </div>
          <div class="col-sm-3">
            <input type="number" name="Tea" placeholder="0" max="3">
          </div>
          <div class="col-sm-3">
            10
          </div>
        </div>
        <br>
          <div class="row">
          <div class="col-sm-3">
            <h5>1</h5>
          </div>
          <div class="col-sm-3">
            <h5>Coffee</h5>
          </div>
          <div class="col-sm-3">
            <input type="number" name="Tea" placeholder="0" max="3">
          </div>
          <div class="col-sm-3">
            10
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <h5>1</h5>
          </div>
          <div class="col-sm-3">
            <h5>Boost</h5>
          </div>
          <div class="col-sm-3">
            <input type="number" name="Tea" placeholder="0" max="3">
          </div>
          <div class="col-sm-3">
            10
          </div>
        </div>
    </div>    
</form>     
   <footer style="text-align: right">
    <div>
      <input type="date" name="date">
      <input type="time" min="09:30:00" max="22:30:00" name="time">
    </div>
    <div>
    <button type="submit" name="submit" class="btn btn-success mt-3">PLACE ORDER</button>
    <div>
</footer>
</body>
</html>
