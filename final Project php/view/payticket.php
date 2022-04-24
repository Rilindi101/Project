
<?php
session_start();
$ticketId = $_GET['id'];
include_once '../repository/ticketRepository.php';



$ticketRepository = new TicketRepository();

$ticket  = $ticketRepository->getTicketById($ticketId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.cut {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
}

.cut:hover {
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
        <label>Ticket ID</label>
        <input type="text" name="id"  value="<?=$ticket['id']?>" readonly> <br> <br>
        <br>
        <label>Match/Game</label>
        <input type="text" name="name" value="<?=$ticket['name']?>" readonly > <br> <br>
        <br>
        <label>Stadium</label>
        <input type="text" name="stadium"  value="<?=$ticket['stadium']?>" readonly> <br> <br>
        <br>
        <label>Match Time</label>
        <input type="text" name="timee"  value="<?=$ticket['timee']?>" readonly> <br> <br>
        <br>
        <label>Ticket Price</label>
        <input type="text" name="price"  value="<?=$ticket['price']?>" readonly> <br> <br>
        <br>
        <label>Image</label>
        <input type="text" name="image" value="<?php echo $ticket['image']?>">
        <?php
        echo 
        "
        <img src='../Img/$ticket[image]' width='200px' height='200px'>
        "
        ?>
        <hr>
        <label>Bank Account</label>
        <input type="text" name="bank" placeholder="0000 0000 0000 0000" class="bank" required> <br> <br>
         <br>

        <button type="submit" class="cut" name="cut">Pay</button>
        <div class="back">
            <a href="Eco.php">Go Shop</a>
        </div>
        
    </form>
    <?php 
    include_once '../controller/tickcutController.php';
    ?>
</body>
</html>