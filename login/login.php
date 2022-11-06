<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <img src="assets/th.svg"/>
    <h1>Hi Welcome...</h1>
    <h2>Login form</h2>
    <div class="best">
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Username</label><br>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label><br>
      <input type="password" id="password" value=""> <br>
      <br>
      <button type="button" onclick="submitData();">Login</button>
    </form>
    <br>
    <div>
    <a  class="one" href="index.php">Go to Register</a>
    <?php require 'script.php';?>
    </div>
    </div>

    
</body>
</html>