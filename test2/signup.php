<?php
 require "header.php";
 error_reporting(E_ALL);
ini_set('display_errors', 'On');
 ?>
 
    <main>
        <h1>Signup</h1>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill In All Fields!</p>';
                } else if ($_GET['error'] == "invaliduidemail") {
                    echo '<p class="signuperror">Invalid Username And E-Mail!</p>';
                } else if ($_GET['error'] == "invalidmail") {
                    echo '<p class="signuperror">Invalid E-Mail!</p>';
                } else if ($_GET['error'] == "invaliduid") {
                    echo '<p class="signuperror">Invalid Username!</p>';
                } else if ($_GET['error'] == "passwordcheck") {
                    echo '<p class="signuperror">Your Passwords Do Not Match!</p>';
                } else if ($_GET['error'] == "usertaken") {
                    echo '<p class="signuperror">That Username Is Already Taken!</p>';
                } else if ($_GET['error'] == "sqlerror") {
                    echo '<p class="signuperror">There Was An Error Contacting Our Databases. Please Contact A Developer If This Issue Persists!!</p>';
                }
            } else if (isset($_GET['signup'] == "success")) {
                echo '<p class="signupsuccessful>Successfully Signed Up!<p>'
            }
        ?>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-Mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </main>
  
<?php
  require "footer.php";
?>
