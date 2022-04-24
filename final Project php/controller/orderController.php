<?php  
include_once '../repository/porosiaRepository.php';
include_once '../models/order.php';

if(isset($_POST['order'])){
    if(empty($_POST['nameu']) || empty($_POST['name']) || empty($_POST['size']) || empty($_POST['price'])  || empty($_POST['image']) || empty($_POST['street']) || empty($_POST['bank'])){
        
    }else{
        $nameu = $_POST['nameu'];
        $name = $_POST['name'];
        $size = $_POST['size'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $street = $_POST['street'];
        $bank = $_POST['bank'];
        $id = $name.rand(100,999);

        $porosia = new Porosia($nameu,$id,$name,$size,$price,$image,$street,$bank);
        $porosiaRepository = new PorosiaRepository();

        $porosiaRepository->insertPorosia($porosia);
    }
}



?>
