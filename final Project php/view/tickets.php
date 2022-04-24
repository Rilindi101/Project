
<?php

include "dashboard.php";
?>
<html>
<head>
	<style>
		form{
			text-align: center;
			margin-top: 20px;
			margin-left: 200px;
			display: block;
			width: 400px;
			height: 300px;
			background-color: gray;
		}
		input,button{
			padding: 10px;
			width: 300px;
		}
		table{
			margin-left: 300px;
			margin-top: 100px;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="tables.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<form action="tickets.php" method="post">
			<h3>Inserto Biletat</h3>
				<input type="text" name="name" placeholder="Emri" required>
				<br>
				<input type="text" name="stadium" placeholder="Stadiumi" required>
				<br>
				<input type="text" name="timee" placeholder="Koha" required>
				<br>
				<input type="text" name="price" placeholder="Cmimi" required>
				<br>
				<input type="file" name="image" accept="image/png, image/jpeg, image/jpg" required>
				<hr>
				<button type="submit" class="add" name="add">Add Product</button>
		</form>
	<?php 
    include_once '../controller/ticketController.php';
    ?>
    <table border="1">
             <tr>
                 <th>NAME</th>
                 <th>STADIUM</th>
                 <th>TIME</th>
                 <th>PRICE</th>
                 <th>IMAGE</th>
                 <th>EDIT</th>
                 <th>DELETE</th>
                 
             </tr>

             <?php 
             include_once '../repository/ticketRepository.php';

             $ticketRepository = new TicketRepository();

             $tickets = $ticketRepository->getAllTickets();

             foreach($tickets as $ticket){
                echo 
                "
                <tr>
                     <td>$ticket[name] </td>
                     <td>$ticket[stadium] </td>
                     <td>$ticket[timee] </td>
                     <td>$ticket[price] </td>
                     <td><img src='../Img/$ticket[image]' width='100px' height='100px';</td>
                     <td><a href='editT.php?id=$ticket[id]' style='color:green'>Edit</a> </td>
                     <td><a href='deleteT.php?id=$ticket[id]' style='color:red'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>

</body>
</html>