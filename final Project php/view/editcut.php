
<?php
$tickcutId = $_GET['id'];
include_once '../repository/tickcutRepository.php';



$tickcutRepository = new TickcutRepository();

$tickcut  = $tickcutRepository->getTickcutById($tickcutId);


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
    <h3>Edit TICKET CUT</h3>
    <form action="" method="post">
        <input type="text" name="nameu"  value="<?=$tickcut['nameu']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$tickcut['name']?>"> <br> <br>
        <input type="text" name="stadium"  value="<?=$tickcut['stadium']?>"> <br> <br>
        <input type="text" name="timee"  value="<?=$tickcut['timee']?>"> <br> <br>
        <input type="text" name="price"  value="<?=$tickcut['price']?>"> <br> <br>
        <input type="text" name="bank"  value="<?=$tickcut['bank']?>"> <br> <br>
        <input type="file" name="image" accept="image/png, image/jpeg, image/jpg"  value="<?=$tickcut['image']?>"> <br> <br>

        <input type="submit" name="t" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['t'])){
    $nameu=$_POST['nameu'];
    $id =$tickcut['id'];
    $name = $_POST['name'];
    $stadium = $_POST['stadium'];
    $timee = $_POST['timee'];
    $price = $_POST['price'];
    $bank = $_POST['bank'];
    $image = $_POST['image'];

    $tickcutRepository->updateTickcut($nameu,$id,$name,$stadium,$timee,$price,$bank,$image);
    header("location:titable.php");
}


?>