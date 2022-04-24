<?php

$porosiaId = $_GET['id'];
include_once '../repository/porosiaRepository.php';




$porosiaRepository = new PorosiaRepository();

$porosiaRepository->deletePorosia($porosiaId);

header("location:ortable.php");


?>