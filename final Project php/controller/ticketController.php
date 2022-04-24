<?php    
include_once '../repository/ticketRepository.php';
include_once '../models/ticket.php';

if(isset($_POST['add'])){
    if(empty($_POST['name']) || empty($_POST['stadium']) || empty($_POST['timee']) || empty($_POST['price']) || empty($_POST['image'])){
        
    }else{
        $name = $_POST['name'];
        $stadium = $_POST['stadium'];
        $timee = $_POST['timee'];
        $price = $_POST['price'];
        $image = $_POST['image']; 
        $id = $name.rand(100,999);

        $ticket = new Ticket($id,$name,$stadium,$timee,$price,$image);
        $ticketRepository = new TicketRepository();

        $ticketRepository->insertTicket($ticket);
    }
}



?>
