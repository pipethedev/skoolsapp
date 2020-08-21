<?php
    session_start(); 
    session_unset();
    session_destroy();

    header("location: register.php");
    //cookie kill
    setcookie("hash", "");
    exit(0);
?>