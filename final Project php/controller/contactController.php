<?php    
include_once '../repository/contactRepository.php';
include_once '../models/contact.php';

if(isset($_POST['send'])){
    if(empty($_POST['name']) || empty($_POST['coment']) || empty($_POST['number'])){
        
    }else{
        $name = $_POST['name'];
        $coment = $_POST['coment'];
        $number = $_POST['number'];
        $id = $name.rand(100,999);

        $contact = new Contact($id,$name,$coment,$number);
        $contactRepository = new ContactRepository();

        $contactRepository->insertContact($contact);
    }
}



?>
