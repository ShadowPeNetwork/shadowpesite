<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        //die(mysqli_error());
        header("location: ../index.php?error=emptyfields");
    exit();   
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
        $stmt = mtsqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            //die(mysqli_error());
            header("location: ../index.php?error=emptyfields");
            exit();  
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    //die(mysqli_error());
                    header("location: ../index.php?error=wrongpwd");
                exit();                    
                } else if ($pwdCheck == true) {
                session_start();
                $_SESSION['userId'] = $row['idUsers'];
                $_SESSION['userUid'] = $row['uidUsers'];
                //die(mysqli_error())
                header("location: ../index.php?login=success");
                exit();                
                } else {
                    //die(mysqli_error());
                    header("location: ../index.php?error=nouser");
                exit();                
                }
            } else {
                //die(mysqli_error());
                header("location: ../index.php?error=nouser");
            exit();     
            }
        }
    }

} else {
    header("location: ../index.php");
    exit(); 
}