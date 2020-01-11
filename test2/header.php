<?php
session_start();
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Wlcome To ShadowPe! The Leading Minecraft Bedrock Server!">
    <meta name=viewport content="width=device-width , initial-scale=1">
    <title>Shadow Pe | Network</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" href="img/logo.png" type="image/png">
</head>

  <div id="header">
    <img src="img/logo.png" alt="logo" class="logo">
    <div id="nav">
      <form action="https://shadowpe.azurewebsites.net/apply/form.php">
        <button type="submit" class="button">Apply For Staff</button>
      </form>
    </div>
    <div id="button-div">

    </div>
  </div>

</html>



<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="Wlcome to ShadowPe! The Leading Minecraft Bedrock Server!">
      <meta name=viewport content="width=device-width , initial-scale=1">
      <title>Shadow Pe | Network</title>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="icon" href="img/logo.png" type="image/png">
  </head>
  <body>
    <header>
      <a href="#">
        <a href="" class="nav-button">Sign Up</a>
      </a>
      <nav>


        <div>
          <?php
            if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit" class="button">Logout</button>
          </form>';
            } else {
              echo '
          <form action="includes/login.inc.php" method="post">
             <input type="text" name="mailuid" class="login-box" placeholder="Username/ E-Mail">
            <input type="password" name="pwd" class="login-box" placeholder="Password">
            <button type="submit" name="login-submit" class="button">Login</button>
          </form>
          <a href="signup.php" class="button">Sign Up</a>
            ';
          }
        ?>
        </div>
      </nav>
    </header>
