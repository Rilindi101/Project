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
			background-color: orangered;
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
		<form action="products.php" method="post">
			<h3>Inserto Produktet</h3>
				<input type="text" name="name" placeholder="Emri" required>
				<br>
				<input type="text" name="size" placeholder="Madhesia" required>
				<br>
				<input type="text" name="price" placeholder="Cmimi" required>
				<br>
				<input type="file" name="image" accept="image/png, image/jpeg, image/jpg" required>
				<hr>
				<button type="submit" class="add" name="add">Add Product</button>
		</form>
	<?php 
    include_once '../controller/productController.php';
    ?>
    <table border="1">
             <tr>
                 <th>NAME</th>
                 <th>SIZE</th>
                 <th>PRICE</th>
                 <th><img src="">IMAGE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/productRepository.php';

             $productRepository = new ProductRepository();

             $products = $productRepository->getAllProducts();

             foreach($products as $product){
                echo 
                "
                <tr>
                     <td>$product[name] </td>
                     <td>$product[size] </td>
                     <td>$product[price] </td>
                     <td><img src='../Img/$product[image]' width='100px' height='100px' </td>
                     <td><a href='editP.php?id=$product[id]' style='color:green'>Edit</a> </td>
                     <td><a href='deleteP.php?id=$product[id]' style='color:red'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>

</body>
</html>