<?php
session_start();
?>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="This Is A Meta Description">
      <meta name=viewport content="width=device-width , initial-scale=1">
      <title>Shadow Pe | Network</title>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
  
    <header>
      <nav>
        <a href="#">
          <img src="img/logo.png" alt="logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Portfolio</a></li> 
          <li><a href="#">About Me</a></li>
          <li><a href="#">Contact</a></li>          
        </ul>
        <div>
          <?php
            if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post"> 
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
            } else {
              echo '
          <form action="includes/login.inc.php" method="post"> 
             <input type="text" name="mailuid" placeholder="Username/ E-Mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
            <a href="signup.php">Sign Up</a>
            ';
          }
        ?>
        </div>
      </nav>
    </header>
