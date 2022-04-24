<?php
session_start();
if($_SESSION['userType'] =='admin'){
	header("Location:dashboard.php");
}
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
?>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="hstyle.css">
</head>
<body>
	<header class="header1">
		<div class="titulli" id="titulli">
			<h1><a href="home.html">F99</a></h1>
		</div>
		<div class="list" id="list">
			<ul>
				<li><a href="home.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="Eco.php">E-COMMERCE</a></li>
				<li><a href="Tick.php">TICK</a></li>
				<li><a href="logout.php" style="color: orangered;">LOGOUT</a></li>
			</ul>
		</div>
	</header>
	<header class="header2">

			<div class="titulli2" id="titulli2">
				<img src="../img/topibuton.png"  width="90px" height="85px">
			</div>
		<div class="list2" id="list2">
			<ul>
				<li><a href="home.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="Eco.html">E-COMMERCE</a></li>
			</ul>
		</div>
	</header>
	<!--	<img src="topibuton.png" width="50px" height="50px"> 
		<div class="fundheader" id="fundheader">
			<img src="topibuton.png">
		</div>
		!-->
	</header>


	<div class="container" id="container">
		<div class="sliderijasht">
			<div class="slider" id="slider">

	    	</div>
		</div>
		<div class="sliderijasht2">
			<div class="slider2" id="slider2">

	    	</div>
		</div>

		<div class="kits" id="kits">
			<div class="box-kontroll">

				<div class="metituj">
					<div class="box" id="box1">
					</div>
				</div>
				<div class="metituj">
					<div class="box" id="box2">
					</div>
				</div>
				<div class="metituj">
					<div class="box" id="box3">
					</div>
				</div>
				<div class="orderb">
				</div>
				
			</div>
			
		</div>

		<div class="kits2" id="kits2">
			<div class="box-kontroll2">
				
				<div class="metituj2">
					<div class="box2" id="box21">
					</div>
				</div>
				<div class="metituj2">
					<div class="box2" id="box22">
					</div>
				</div>
				<div class="metituj2">
					<div class="box2" id="box23">
					</div>
				</div>
				<div class="orderb2">
				</div>
				
			</div>
			
		</div>

		<div class="standings" id="standings">
			<table class="table">
				<thead>
					<tr>
						<th colspan="2">Club</th>
						<th>MP</th>
						<th>W</th>
						<th>D</th>
						<th>L</th>
						<th>GF</th>
						<th>GA</th>
						<th>GD</th>
						<th>PTS</th>
						<th>LAST FIVE</th>
					</tr>
				</thead>
				<tbody class="tbody">
					<tr id="tr1">
						<td data-label=""><img src="../img/citylogo.png" width="55px" height="55px"></td>
						<td data-label="CLUB">Man City</td>
						<td data-label="MP">18</td>
						<td data-label="W">14</td>
						<td data-label="D">2</td>
						<td data-label="L">2</td>
						<td data-label="GF">44</td>
						<td data-label="GA">9</td>
						<td data-label="GD">35</td>
						<td data-label="PTS">44</td>
						<td data-label="LAST FIVE">WWWWW</td>

					</tr>

					<tr id="tr2">
						<td data-label=""><img src="../img/livlogo.png" width="55px" height="55px"></td>
						<td data-label="CLUB">Liverpool</td>
						<td data-label="MP">18</td>
						<td data-label="W">12</td>
						<td data-label="D">5</td>
						<td data-label="L">1</td>
						<td data-label="GF">50</td>
						<td data-label="GA">15</td>
						<td data-label="GD">35</td>
						<td data-label="PTS">41</td>
						<td data-label="Last Five">EWWWW</td>

					</tr>

					<tr id="tr1">
						<td><img src="../img/chelsealogo.png" width="55px" height="55px"></td>
						<td data-label="CLUB">Chelsea</td>
						<td data-label="MP">18</td>
						<td data-label="W">11</td>
						<td data-label="D">5</td>
						<td data-label="L">2</td>
						<td data-label="GF">39</td>
						<td data-label="GA">12</td>
						<td data-label="GD">27</td>
						<td data-label="PTS">38</td>
						<td data-label="LAST FIVE">EEWLW</td>

					</tr>

					<tr id="tr2">
						<td ata-label=""><img src="../img/aslogo.png" width="55px" height="55px"></td>
						<td data-label="CLUB">Arsenal</td>
						<td data-label="MP">18</td>
						<td data-label="W">10</td>
						<td data-label="D">2</td>
						<td data-label="L">6</td>
						<td data-label="GF">27</td>
						<td data-label="GA">23</td>
						<td data-label="GD">4</td>
						<td data-label="PTS">32</td>
						<td data-label="LAST FIVE">WWWLL</td>

					</tr>

					<tr id="tr1">
						<td ata-label=""><img src="../img/whlogo.png" width="55px" height="55px"></td>
						<td data-label="CLUB">West Ham</td>
						<td data-label="MP">17</td>
						<td data-label="W">8</td>
						<td data-label="D">4</td>
						<td data-label="L">5</td>
						<td data-label="GF">28</td>
						<td data-label="GA">21</td>
						<td data-label="GD">7</td>
						<td data-label="PTS">28</td>
						<td data-label="LAST FIVE">LEWEL</td>

					</tr>

					<tr id="tr2">
						<td data-label=""><img src="../img/manlogo.png" width="55px" height="55px"></td>
						<td data-label="CLUB">Man UTD</td>
						<td data-label="MP">16</td>
						<td data-label="W">8</td>
						<td data-label="D">3</td>
						<td data-label="L">5</td>
						<td data-label="GF">26</td>
						<td data-label="GA">24</td>
						<td data-label="GD">2</td>
						<td data-label="PTS">27</td>
						<td data-label="LAST FIVE">WWWEL</td>

					</tr>
				</tbody>
				
				
			</table>


		</div>
		
		<div class="tickets" id="tickets">
			<h1>GET YOUR TICKETS</h1>
			<img src="../img/bileta.png">
			<div class="bt">
				<a href="Eco.html">E-COMMERCE </a>
			</div>
			

				
			
		</div>
		<!--
		<div class="poll" id="poll">
			
		</div>
		!-->
		<div class="fundi" id="fundi">
			<div class="fundo">
				<div class="f" id="f1">
					<h5>CONTACT TEAM SUPPORT</h5>
					<p>Email:F99@GMAIL.COM</p>
					<p>Phone: +383 (4S) SSS/SSS</p>
					
				</div>
				<div class="f" id="f2">
					<h5>CONTACT MANAGER</h5>
					<p>Email:F99MANAGER@GMAIL.COM</p>
					<p>Phone: +383 (4S) SSS/SSS</p>
				</div>
				<div class="f" id="f3">
					<h5>I WANT TO SHOW MY IDEA</h5>
					<p>Email:F99IDEA@GMAIL.COM</p>
					<p>Phone: +383 (4S) SSS/SSS</p>
				</div>
			</div>
			<h6>ALL RIGHTS RESERVED F99.BECOME OUR PART.FOOTBALL IS OUR LIFE.</h6>
			
		</div>
	</div>
	<!--
<script>
        var pht1 = document.getElementById("images");

        function showFirstPht(){
            pht1.style.marginLeft="0";
        }
        function showSecondPht(){
            pht1.style.marginLeft="-100%";
        }
        function showThirdPht(){
            pht1.style.marginLeft="-200%";
        }
        function showFourthPht(){
            pht1.style.marginLeft="-300%";
        }
</script>
!-->
<script>

	var menuBtn = document.querySelector("img");
        var list = document.getElementById("list2");

        var isShowed = false;
        menuBtn.addEventListener("click",function(){
            if(isShowed){
                isShowed = false;
                list2.style.display="none";
            }else{
                isShowed = true;
                list2.style.display="inline";
            }
            

        })
	
</script>
</body>
</html>