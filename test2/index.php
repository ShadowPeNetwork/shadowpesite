<?php
 require "header.php";
 ?>
 
  <main>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You Are Logged in!</p>'
      } else {
        echo '<p class="login-status">You Are Logged in!</p>'
      }
    ?> 
    <p>stuff</p1>   
  </main>
  
<?php
  require "footer.php";
?>
