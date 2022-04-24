<?php 
include_once '../database/databaseConnection.php';

class ProductRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertProduct($product){

       $conn = $this->connection;
       
       $id = $product->getId();
       
    $name = $product->getName();
    $size = $product->getSize();
    $price = $product->getPrice();
    $image = $product->getImage();


     $sql = "INSERT INTO product (id,name,size,price,image) VALUES (?,?,?,?,?)";
   
     $statement = $conn->prepare($sql);

     $statement->execute([$id,$name,$size,$price,$image]);

     echo "<script>alert('U regjistrua!');</script>";
    }

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
       $products = $statement->fetchAll();
       
       return $products;
    }

function getProductById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM product WHERE id='$id'";

    $statement = $conn->query($sql);
    $product = $statement->fetch();

    return $product;
}
function updateProduct($id,$name,$size,$price,$image){
    $conn = $this->connection;

    $sql = "UPDATE product SET name=?, size=?, price=? , image=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$name,$size,$price,$image,$id]);

    echo "<script>alert('update was successful'); </script>";
} 
function deleteProduct($id){
    $conn = $this->connection;

    $sql = "DELETE FROM product WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 
}
?>