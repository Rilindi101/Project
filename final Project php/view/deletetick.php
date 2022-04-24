<?php

$tickcutId = $_GET['id'];
include_once '../repository/tickcutRepository.php';




$tickcutRepository = new TickcutRepository();

$tickcutRepository->deleteTickcut($tickcutId);

header("location:titable.php");


?>