<?php
include "dashboard.php";
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="tables.css">
    <style>
    	td{
    		padding: 10px;
    	}
    	a{
    		text-decoration: none;
    	}
        main{
            margin-left: 150px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <main>
    <div class="main">
  <h2>Dashboard</h2>
  <p>You are an Administrator!</p>
  <p>Be Carefull What You Delete or Edit!</p>
</div>
   
<table border="1">
             <tr>
                 <th>ID</th> 
                 <th>USERNAME</th>
                 <th>EMAIL</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[id]</td> 
                     <td>$user[username] </td>
                     <td>$user[email] </td>
                     <td>$user[password] </td>
                     <td><a href='edit.php?id=$user[id]' style='color:green'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[id]' style='color:red'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
    <table border="2">
             <tr>
                 <th>Name</th>
                 <th>Coment</th>
                 <th>Number</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/contactRepository.php';

             $contactRepository = new ContactRepository();

             $contacts = $contactRepository->getAllContacts();

             foreach($contacts as $contact){
                echo 
                "
                <tr>
                     <td>$contact[name] </td>
                     <td>$contact[coment] </td>
                     <td>$contact[number] </td>
                     <td><a href='editcontact.php?id=$contact[id]' style='color:green'>Edit</a> </td>
                     <td><a href='deletecontact.php?id=$contact[id]' style='color:red'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>

</style>
</main>
</body>
</html>

