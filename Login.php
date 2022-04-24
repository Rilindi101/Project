
<?php

$host="localhost";
$user="root";
$password="";
$db="Project";




$data=mysqli_connect($host,$user,$password,$db);


 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
   $username=$_POST["username"];
   $password=$_POST["password"];

   $sql="select * from user where username= '".$username."'  AND  password='".$password."' 
     ";


     $result=mysqli_query($data,$sql);

     $row=mysqli_fetch_array($result);

     if($row["userType"]=="admin")
     {
       header("location:dashboard.php");
    }
    else if($row["userType"]=="user")
    {
      header("location:home.html");
     }
     else{
       header("location:login.php");
     }
    }
    
    
    

 ?>


 
 <!DOCTYPE html>
 <html>
  <head>
    <title>LOG IN</title>
  </head>
  <link rel="stylesheet" href="login1.css">
  
  
  
  <body>
    <div id="boxK">
      
      
      <div class="leftSide">
        <form action="Login.php" id="forma" method="POST">
          <img src="topibuton.png" class="logo" alt="logo"  width="100" height="100">
          <p>ALREADY HERE</p>
          <input type="text"  name="username" placeholder="username..." id="username1">
          <label style="color: red;" id="usernameMsg"></label>
          <br>
          <input type="password" name="password" placeholder="password..." id="password1">
          <label style="color: red;" id="passwordMSG"></label>
          <br>
          <input type="submit" name="loginBtn" value="login" id="loginBtn">
          <span class="psw1"><a href="signup.php">Sign Up</a></span>
        </form>
      </div>
         <style>
           span.psw1{
             float:right;
           }
         </style>




<script src="loginJS.js"></script>
    </body>
</html>

