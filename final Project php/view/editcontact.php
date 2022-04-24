
<?php
$contactId = $_GET['id'];
include_once '../repository/contactRepository.php';



$contactRepository = new ContactRepository();

$contact = $contactRepository->getContactById($contactId);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="confirm.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Contact</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$contact['id']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$contact['name']?>"> <br> <br>
        <input type="text" name="coment"  value="<?=$contact['coment']?>"> <br> <br>
        <input type="text" name="number"  value="<?=$contact['number']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $contact['id'];
    $name = $_POST['name'];
    $coment = $_POST['coment'];
    $number = $_POST['number'];

    $contactRepository->updateContact($id,$name,$coment,$number);
    header("location:dashboard.php");
}


?>