<?php

$productId = $_GET['id'];
include_once '../repository/productRepository.php';




$productRepository = new ProductRepository();

$productRepository->deleteProduct($productId);

header("location:products.php");


?>