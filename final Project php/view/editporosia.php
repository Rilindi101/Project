
<?php
$porosiaId = $_GET['id'];
include_once '../repository/porosiaRepository.php';



$porosiaRepository = new PorosiaRepository();

$porosia  = $porosiaRepository->getPorosiaById($porosiaId);


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
    <h3>Edit Order</h3>
    <form action="" method="post">
        <input type="text" name="nameu"  value="<?=$porosia['nameu']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$porosia['name']?>"> <br> <br>
        <input type="text" name="size"  value="<?=$porosia['size']?>"> <br> <br>
        <input type="text" name="price"  value="<?=$porosia['price']?>"> <br> <br>
        <input type="text" name="street"  value="<?=$porosia['street']?>"> <br> <br>
        <input type="text" name="bank"  value="<?=$porosia['bank']?>"> <br> <br>
        <input type="file" name="image" accept="image/png, image/jpeg, image/jpg"  value="<?=$product['image']?>"> <br> <br>

        <input type="submit" name="s" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['s'])){
    $nameu=$_POST['nameu'];
    $id = $porosia['id'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $bank = $_POST['bank'];
    $street = $_POST['street'];

    $porosiaRepository->updatePorosia($nameu,$id,$name,$size,$price,$image,$street,$bank);
    header("location:ortable.php");
}


?>