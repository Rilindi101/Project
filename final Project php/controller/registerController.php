<?php    
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['username1']) || empty($_POST['email']) || empty($_POST['password1'])){
        
    }else{
        $username = $_POST['username1'];
        $email = $_POST['email'];
        $password = $_POST['password1'];
        $id = $username.rand(100,999);

        $user = new User($id,$username,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}



?>
