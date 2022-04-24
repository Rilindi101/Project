
<?php
$userId = $_GET['id'];
include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post" >
        <input type="text" id="emri" name="id"  value="<?=$user['id']?>" readonly> <br> <br>
        <input type="text" name="username"  value="<?=$user['username']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
    
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id,$username,$email,$password);
    header("location:dashboard.php");
}


?>