
<!DOCTYPE html>
 <html>
  <head>
    <title>LOG IN</title>
  </head>
  <link rel="stylesheet" href="signUPcss.css">
  
  
  
  <body>
    <div id="boxK">

                  <div class="rightSide">
                    <form action="signup.php" method="POST" >
                    <img src="topibuton.png" class="logo" alt="logo"  width="100" height="100">
                      <p>Sign up Register</p>
                      <input type="text" name="username1" placeholder="Username:" id="username" >
                      <label style="color: red;" id="rightSideNameMsg"></label>
                      <input type="email" name="email" placeholder="Email:" id="email">
                      <label style="color: red;" id="emailMsg"></label>
                      <input type="password" name="password1" placeholder="Password:" id="password" >
                      <label style="color: red;" id="rightSidePassMsg"></label>
                      <input type="submit" name ="registerBtn" value="SIGN UP" id="signUP">
                      <span class="psw"><a href="login.php">Log In</a></span>
                    </form>
                    </div>

       </div>
       <style>
         .rightSide{
          background-color: rgba(240, 240, 240, 0.548);
          border: 3px solid black;
         }
       </style>

       <?php 
       
    
    
       
       include '../controller/registerController.php';
       ?>
          <script src="signupJS.js"></script>








      
    </body>
</html>