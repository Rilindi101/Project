<?php
include (home.php);
session_start();
echo "Username: ".$_SESSION['username'];
?>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.send {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.send:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
select{
	background-color: #D8D8D8;
	padding: 20px;
}
#com{
  padding: 100px;
}
</style>
</head>
<body>

<form action="contact.php" method="post">
  <div class="container">
    <h1>Write your opinion</h1>
    <p>Let your number so we can contact you!</p>
    <hr>

    <label for="name"><b>Name/Email</b></label>
    <input type="text" value="<?=$_SESSION['username']?>" name="name" id="name" readonly>

    <hr>
    <label for="coment"><b>Comment:</b></label>
    <input type="text" placeholder="Enter Comment" name="coment" id="coment" required>

     <label for="number"><b>Your Number</b></label>
    <input type="text" placeholder="Enter Your Number" name="number" id="number" required>


    <hr>
    <button type="submit" class="send" name="send">Send</button>
  </div>
</form>
    <?php 
    include_once '../controller/contactController.php';
    ?>

</body>
</html>
