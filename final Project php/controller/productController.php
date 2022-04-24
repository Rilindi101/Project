<?php    
include_once '../repository/productRepository.php';
include_once '../models/product.php';

if(isset($_POST['add'])){
    if(empty($_POST['name']) || empty($_POST['size']) || empty($_POST['price']) || empty($_POST['image'])){
        
    }else{
        $name = $_POST['name'];
        $size = $_POST['size'];
        $price = $_POST['price'];
        $image = $_POST['image']; 
        $id = $name.rand(100,999);


        $product = new Product($id,$name,$size,$price,$image);
        $productRepository = new ProductRepository();

        $productRepository->insertProduct($product);
    }
}



?>
