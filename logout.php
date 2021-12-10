<?php
    session_start();

    header("location:index.php"); //to redirect back to "index.php" after logging out
    session_start(); //ensure you are using same session
    session_destroy(); //destroy the session
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);

    echo 'You have been logged out';
    header('Refresh: 2; URL = login.php');
    exit();
?>