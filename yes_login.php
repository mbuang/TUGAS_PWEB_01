<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="style.css">
    <style>
body {
        background-image: url(bg-masthead.jpg)
}</style>
    <title>IT Studio</title>
</head>
<body>
    <div class="container-logout">
  <form action="" method="POST" class="login-email">
   <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ." di IT Studio!". "</h1>"; ?>
   
   <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
   </div>
  </form>
 </div>
</body>
</html>