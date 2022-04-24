<?php 
include_once '../database/databaseConnection.php';

class ContactRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertContact($contact){

       $conn = $this->connection;
       
       $id = $contact->getId();
       
    $name = $contact->getName();
    $coment = $contact->getComent();
    $number = $contact->getNumber();


     $sql = "INSERT INTO contact (id,name,coment,number) VALUES (?,?,?,?)";
   
     $statement = $conn->prepare($sql);

     $statement->execute([$id,$name,$coment,$number]);

     echo "<script>alert('Your message sent!');</script>";
    }

    function getAllContacts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contact";

        $statement = $conn->query($sql);
       $contact = $statement->fetchAll();
       
       return $contact;
    }

function getContactById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM contact WHERE id='$id'";

    $statement = $conn->query($sql);
    $contact = $statement->fetch();

    return $contact;
}
function updateContact($id,$name,$coment,$number){
    $conn = $this->connection;

    $sql = "UPDATE contact SET name=?, coment=?, number=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$name,$coment,$number,$id]);

    echo "<script>alert('update was successful'); </script>";
} 
function deleteContact($id){
    $conn = $this->connection;

    $sql = "DELETE FROM contact WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 
}
//$userRepo = new UserRepository;

//$userRepo->insertUser();

?>