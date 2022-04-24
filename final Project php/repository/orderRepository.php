<?php 
include_once '../database/databaseConnection.php';

class PorosiaRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertPorosia($porosia){

       $conn = $this->connection;
        $nameu = $porosia->getNameu();
       $id = $porosia->getId();
   
    $name = $porosia->getName();
    $size = $porosia->getSize();
    $price = $porosia->getPrice();
    $image = $porosia->getImage();
    $street = $porosia->getStreet();
    $bank = $porosia->getBank();


     $sql = "INSERT INTO porosia (nameu,id,name,size,price,image,street,bank) VALUES (?,?,?,?,?,?,?,?)";
   
     $statement = $conn->prepare($sql);

     $statement->execute([$nameu,$id,$name,$size,$price,$image,$street,$bank]);

     echo "<script>alert('Porosia eshte Konfirmuar!');</script>";
    }

    function getAllPorosite(){
        $conn = $this->connection;

        $sql = "SELECT * FROM porosia";

        $statement = $conn->query($sql);
       $porosite = $statement->fetchAll();
       
       return $porosite;
    }

function getPorosiaById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM porosia WHERE id='$id'";

    $statement = $conn->query($sql);
    $porosia = $statement->fetch();

    return $porosia;
}
function updatePorosia($nameu,$id,$name,$size,$price,$image,$street,$bank){
    $conn = $this->connection;

    $sql = "UPDATE porosia SET nameu=?,name=?, size=?, price=? , image=? ,street=? , bank=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$nameu,$name,$size,$price,$image,$street,$bank,$id]);

    echo "<script>alert('update was successful'); </script>";
} 
function deletePorosia($id){
    $conn = $this->connection;

    $sql = "DELETE FROM porosia WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 
}
?>