
<?php
$orderId = $_GET['id'];
include_once '../repository/ordersRepository.php';



$orderRepository = new OrderRepository();

$order  = $orderRepository->getOrderById($orderId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$order['id']?>" readonly> <br> <br>
        <input type="text" name="email"  value="<?=$order['email']?>"> <br> <br>
        <input type="text" name="desc"  value="<?=$order['desc']?>"> <br> <br>
        <input type="text" name="nr"  value="<?=$order['nr']?>"> <br> <br>
        <input type="text" name="bank"  value="<?=$order['bank']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $order['id'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $nr = $_POST['nr'];
    $bank = $_POST['bank'];
    $userRepository->updateUser($id,$email,$desc,$nr,$bank);
    header("location:dashboard.php");
}


?>