<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Register page</title>
        <link rel="stylesheet" href="./css/index.css">
    </head>
    <body>
        <img src="assets/th.svg"/>
        <h2>Registration Form</h2>
        <div class="form">
        <form action="index.html" method="post" autocomplete="off">
            <input type="hidden" id="action" value="register">
            <label for="">Name</label> <br>
            <input type="text" id="name" value=""> <br>
            <label for="">Username</label> <br>
            <input type="text" id="username" value=""> <br>
            <label for="">Password</label> <br>
            <input type="password" id="password" value=""> <br>
            <div class="btn">
                <p>Get Started</p>
            <button type="button" onclick="submitData();">Sign Up</button>
            </div>
        </form>
        <br>
        <a class="one" href="login.php">Go To Login</a>
        <?php require 'script.php'; ?>

        </div>

        
        


    </body>
</html>