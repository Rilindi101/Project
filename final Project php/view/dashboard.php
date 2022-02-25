<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>

<div class="first">
  <div class="foto">
    <img src="topibuton.png" width="75px;" height="70px;">
    
  </div>
  <a href="#about">Accounts</a>
  <a href="products.php">Products</a>
  <a href="orders.php">Orders</a>
</div>

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
                     <td><a href='edit.php?id=$user[id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
    <style>
table, th, td {
  margin-left:200px;
}
</style>
</body>
</html> 
