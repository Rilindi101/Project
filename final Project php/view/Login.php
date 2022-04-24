<?php
session_start();
if(isset($_SESSION["username"])){
    header("Location:home.php");
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
            <form action="login.php" id="forma" method="post">
             <img src="topibuton.png" class="logo" alt="logo"  width="100" height="100">
             <p>ALREADY HERE</p>
             <input type="text"  name="username" placeholder="username..." id="username1">
             <label style="color: red;" id="usernameMsg"></label>
             <br>
            <input type="password" name="password" placeholder="password..." id="password1">
            <label style="color: red;" id="passwordMSG"></label>
            <br>
            <input type="submit" name="loginBtn" value="login" id="loginBtn">
          </form>
          </div>
          

                  <div class="rightSide">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
                    <img src="topibuton.png" class="logo" alt="logo"  width="100" height="100">
                      <input type="text" name="username1" placeholder="Username:" id="username" >
                      <label style="color: red;" id="rightsideNameMsg"></label>
                      <input type="email" name="email" placeholder="Email:" id="email">
                      <label style="color: red;" id="emailMsg"></label>
                      <input type="password" name="password1" placeholder="Password:" id="password" >
                      <label style="color: red;" id="rightsidePassMsg"></label>
                      <input type="submit" name ="registerBtn" value="SIGN UP" id="signUP">
                    </form>
                    </div>

       </div>

       <?php 
    require_once 'loginvalidate.php';
    include_once '../controller/registerController.php';
    ?>



<script src="loginJS.js"></script>
    </body>
</html>