<?php

session_start();

if($_SESSION['userType'] !='admin'){
	header("Location:home.php");
}

if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dashboardd.css">
</head>
<body>

<div class="first">
  <div class="foto">
    <img src="topibuton.png" width="75px;" height="70px;">
    
  </div>
  <a href="dashone.php">Accounts</a>
  <a href="products.php">Products</a>
  <a href="tickets.php">Tickets</a>
  <a href="ortable.php">Orders</a>
  <a href="titable.php">Cuts</a>
  <a href="logout.php">LOG OUT</a>

</div>

    
    
</body>
</html> 
