<?php

$orderId = $_GET['id'];
include_once '../repository/orderRepository.php';




$orderRepository = new OrderRepository();

$orderRepository->deleteOrder($orderId);

header("location:dashboard.php");


?>