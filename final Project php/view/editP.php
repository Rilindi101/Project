
<?php
$productId = $_GET['id'];
include_once '../repository/productRepository.php';



$productRepository = new ProductRepository();

$product  = $productRepository->getProductById($productId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="confirm.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Product</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$product['id']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$product['name']?>"> <br> <br>
        <input type="text" name="size"  value="<?=$product['size']?>"> <br> <br>
        <input type="text" name="price"  value="<?=$product['price']?>"> <br> <br>
        <input type="file" name="image" accept="image/png, image/jpeg, image/jpg"  value="<?=$product['image']?>"> <br> <br>

        <input type="submit" name="editP" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editP'])){
    $id = $product['id'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $productRepository->updateProduct($id,$name,$size,$price,$image);
    header("location:products.php");
}


?>