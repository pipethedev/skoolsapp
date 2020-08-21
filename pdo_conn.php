<?php
session_start();

// Define database
define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass', 'mysql');
define('dbname', 'skoolsapp');

// Connecting database
try {
    $conn = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "bad connection";
}

?>
