<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="./css/welcome.css">
  </head>
  <body>
    <div class="hello">
    <h1>Welcome <?php echo $user["name"]; ?></h1>
    <a class="button" href="logout.php">Logout</a>
    </div>
  </body>
</html>