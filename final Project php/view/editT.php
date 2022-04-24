<?php
$ticketId = $_GET['id'];
include_once '../repository/ticketRepository.php';



$ticketRepository = new TicketRepository();

$ticket  = $ticketRepository->getTicketById($ticketId);


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
    <h3>Edit Ticket</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$ticket['id']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$ticket['name']?>"> <br> <br>
        <input type="text" name="stadium"  value="<?=$ticket['stadium']?>"> <br> <br>
         <input type="text" name="timee"  value="<?=$ticket['timee']?>"> <br> <br>
        <input type="text" name="price"  value="<?=$ticket['price']?>"> <br> <br>
        <input type="file" name="image"   value="<?=$ticket['image']?>" accept="image/png, image/jpeg, image/jpg" required> <br> <br>

        <input type="submit" name="editT" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editT'])){
    $id = $ticket['id'];
    $name = $_POST['name'];
    $stadium = $_POST['stadium'];
    $timee=$_POST['timee'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $ticketRepository->updateTicket($id,$name,$stadium,$timee,$price,$image);
    header("location:tickets.php");
}


?>