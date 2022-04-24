<?php    
include_once '../repository/tickcutRepository.php';
include_once '../models/tickcut.php';

if(isset($_POST['cut'])){
    if(empty($_POST['nameu']) || empty($_POST['name']) || empty($_POST['stadium']) || empty($_POST['timee']) || empty($_POST['price']) || empty($_POST['image']) || empty($_POST['bank'])){
        
    }else{
        $nameu=$_POST['nameu'];
        $name = $_POST['name'];
        $stadium = $_POST['stadium'];
        $timee = $_POST['timee'];
        $price = $_POST['price'];
        $image = $_POST['image']; 
        $bank= $_POST['bank'];
        $id = $name.rand(100,999);

        $tickcut = new Tickcut($nameu,$id,$name,$stadium,$timee,$price,$image,$bank);
        $tickcutRepository = new TickcutRepository();

        $tickcutRepository->insertTickcut($tickcut);
    }
}



?>
