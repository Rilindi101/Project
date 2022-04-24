<?php 
include_once '../database/databaseConnection.php';

class TicketRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertTicket($ticket){

       $conn = $this->connection;
    $id = $ticket->getId();   
    $name = $ticket->getName();
    $stadium = $ticket->getStadium();
    $timee = $ticket->getTimee();
    $price = $ticket->getPrice();
    $image = $ticket->getImage();


     $sql = "INSERT INTO ticket (id,name,stadium,timee,price,image) VALUES (?,?,?,?,?,?)";
   
     $statement = $conn->prepare($sql);

     $statement->execute([$id,$name,$stadium,$timee,$price,$image]);

     echo "<script>alert('U regjistrua!');</script>";
    }

    function getAllTickets(){
        $conn = $this->connection;

        $sql = "SELECT * FROM ticket";

        $statement = $conn->query($sql);
       $tickets = $statement->fetchAll();
       
       return $tickets;
    }

function getTicketById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM ticket WHERE id='$id'";

    $statement = $conn->query($sql);
    $ticket = $statement->fetch();

    return $ticket;
}
function updateTicket($id,$name,$stadium,$timee,$price,$image){
    $conn = $this->connection;

    $sql = "UPDATE ticket SET name=?, stadium=?, timee=?,price=? , image=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$name,$stadium,$timee,$price,$image,$id]);

    echo "<script>alert('update was successful'); </script>";
} 
function deleteTicket($id){
    $conn = $this->connection;

    $sql = "DELETE FROM ticket WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 
}
?>