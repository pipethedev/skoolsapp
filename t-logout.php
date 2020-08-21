<?php
    session_start(); 
    session_unset();
    session_destroy();

    header("location: t-signin.php");
    //cookie kill
    setcookie("fetcher", "");
    exit(0);
?>