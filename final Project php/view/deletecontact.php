<?php

$contactId = $_GET['id'];
include_once '../repository/contactRepository.php';




$contactRepository = new ContactRepository();

$contactRepository->deleteContact($contactId);

header("location:dashboard.php");


?>