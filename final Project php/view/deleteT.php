<?php

$ticketId = $_GET['id'];
include_once '../repository/ticketRepository.php';




$ticketRepository = new TicketRepository();

$ticketRepository->deleteTicket($ticketId);

header("location:tickets.php");


?>