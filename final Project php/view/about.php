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
	<title>About</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		header{
			width: 100%;
			height: 100px;
			background-color: orangered;
		}
		header h1{
			font-family: "Gill Sans MT";
			padding: 30px;
		}
		.boxi{
			width: 99%;
			height: 600px;
			border: 7px solid black;
			color: orangered;
			font-family:"Gill Sans MT"; 
		}
		.boxi p{
			font-size: 23px;
			color: black;
			padding: 40px;
			background-color: orangered;
		}
		.boxi p:hover{
			color: white;
			font-size: 40px;
			border-bottom: 2px solid darkred;
		}
		.boxi h1{
			font-size: 50px;
			padding: 40px;
		}
	</style>
</head>
<body>
	<header>
		<h1>ABOUT US</h1>
	</header>
	<div class="boxi">
		<h1>F99</h1>
		<p>Is a Website that you can see the newest things that happens in football.</p>

		<p>First account Creating FOR FREE</p>
		<p>You can order your favourite Kit and other football accessories</p>
		<p>In contact you have special directions for your ideas,support or critic.PLEASE DO NOT HESITATE,every email will be treated in the best way</p>
	</div>

</body>
</html>