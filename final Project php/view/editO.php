
<?php
session_start();
$productId = $_GET['id'];
include_once '../repository/productRepository.php';



$productRepository = new ProductRepository();

$product  = $productRepository->getProductById($productId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.order {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
}

.order:hover {
  opacity: 1;
}
.back{
    background-color: darkred;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          text-align: center;
}
.back a{
    text-decoration: none;
    color: white;
}
    </style>
    <link rel="stylesheet" type="text/css" href="confirm.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <h1>Payment Form</h1>
    <form action="" method="post">
        <label>Mr/Mrs</label>
        <input type="text" name="nameu"  value="<?=$_SESSION['username']?>" readonly style='color:darkred'>
        <hr>
        <label>Product ID</label>
        <input type="text" name="id"  value="<?=$product['id']?>" readonly> <br> <br>
        <br>
        <label>Product Name</label>
        <input type="text" name="name" value="<?=$product['name']?>" readonly > <br> <br>
        <br>
        <label>Product Size</label>
        <input type="text" name="size"  value="<?=$product['size']?>" readonly> <br> <br>
        <br>
        <label>Product Price</label>
        <input type="text" name="price"  value="<?=$product['price']?>" readonly> <br> <br>
        <br>
        <label>Image</label>
        <input type="text" name="image" value="<?php echo $product['image']?>">
        <?php
        echo 
        "
        <img src='../Img/$product[image]' width='200px' height='200px'>
        "
        ?>
        <hr>
        <label>Shipment Address</label>
        <input type="text" name="street" placeholder="St.Example" class="street" required> <br> <br>
        <br>
        <label>Bank Account</label>
        <input type="text" name="bank" placeholder="0000 0000 0000 0000" class="bank" required> <br> <br>
         <br>

        <button type="submit" class="order" name="order">Pay</button>
        <div class="back">
            <a href="Eco.php">Go Shop</a>
        </div>
        
    </form>
    <?php 
    include_once '../controller/orderController.php';
    ?>
</body>
</html>