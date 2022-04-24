<?php

   if(isset($_POST['loginBtn'])){
       if(empty($_POST['username']) || empty($_POST['password'])){
           
       }else{
           $username = $_POST['username'];
           $password = $_POST['password'];

           
           include_once '../repository/userRepository.php';
           $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

           $i=0;
           foreach($users as $user){
               $i++;
               if($username == $user['username'] && $password == $user['password']){
                   echo $username;
                   echo $password;

                   session_start();
                   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;
                   $_SESSION['userType'] = $user['userType'];
                  // setcookie("username","$username",time()+(30*60));
                  // setcookie("username","$username",time()-(60*60));
                   header("location:home.php");
                   exit();

               }else{
                   
                   if($i == sizeof($users)){
                    
                    exit();
                   }
                   
               }
           }
       }
   }
 
?>