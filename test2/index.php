<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

 require "header.php";
 ?>

  <main>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You Are Logged in!</p>';
      } else {
        echo '<p class="login-status">You Are Logged out!</p>
        ';
      }
    ?>
    <p>stuff</p1>
  </main>

<?php
  require "footer.php";
?>
``
