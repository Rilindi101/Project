<?php 
include_once '../database/databaseConnection.php';

class TickcutRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertTickcut($tickcut){

       $conn = $this->connection;
       $nameu=$tickcut->getNameu();
    $id = $tickcut->getId();   
    $name = $tickcut->getName();
    $stadium = $tickcut->getStadium();
    $timee = $tickcut->getTimee();
    $price = $tickcut->getPrice();
    $image = $tickcut->getImage();
    $bank = $tickcut->getBank();


     $sql = "INSERT INTO tickcut (nameu,id,name,stadium,timee,price,image,bank) VALUES (?,?,?,?,?,?,?,?)";
   
     $statement = $conn->prepare($sql);

     $statement->execute([$nameu,$id,$name,$stadium,$timee,$price,$image,$bank]);

     echo "<script>alert('U regjistrua!');</script>";
    }

    function getAllTickcuts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM tickcut";

        $statement = $conn->query($sql);
       $tickcuts = $statement->fetchAll();
       
       return $tickcuts;
    }

function getTickcutById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM tickcut WHERE id='$id'";

    $statement = $conn->query($sql);
    $tickcut = $statement->fetch();

    return $tickcut;
}
function updateTickcut($nameu,$id,$name,$stadium,$timee,$price,$image,$bank){
    $conn = $this->connection;

    $sql = "UPDATE tickcut SET nameu=?, name=?, stadium=?, timee=?,price=? , image=? , bank=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$nameu,$name,$stadium,$timee,$price,$image,$bank,$id]);

    echo "<script>alert('update was successful'); </script>";
} 
function deleteTickcut($id){
    $conn = $this->connection;

    $sql = "DELETE FROM tickcut WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 
}
?>