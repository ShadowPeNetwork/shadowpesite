<?php
if (isset($_POST['signup-submit'])) {

require 'dbh.inc.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];

if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("location: ../signup.php?error=emptyfields&uid=".$username"&mail=".$email);
    exit();
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: ../signup.php?error=invalidmailuid");
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
} else if ($password !== $passwordRepeat) {
    header("location: ../signup.php?error=passwordcheck&mail=".$email"&uid=".$username);
    exit();
} else {
    
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysquli_stmt_prepare($start, $sql)) {
        header("location: ../signup.php?error=sqlerror");
        exit();
    } else {
    mtsqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    myswli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
        header("location: ../signup.php?error=usertaken&mail="$email);
        exit();        
    } else {
    
    $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysquli_stmt_prepare($start, $sql)) {
        header("location: ../signup.php?error=sqlerror");
        exit();
    } else {
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mtsqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
        mysqli_stmt_execute($stmt); 
        header("location: ../signup.php?signup=success");
        exit();
    }
}
    }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

} else {
    header("location: ../signup.php");
    exit();   
}