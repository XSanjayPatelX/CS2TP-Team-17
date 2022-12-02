<?php

// Connection to the database - First Type
define('DB_NAME', 'u_210122134_healthcare');
define('DB_USER', 'u-210122134');
define('DB_PASS', 'muubP681O4ELHGh');
define('DB_HOST', 'localhost');

// If statement used to tell if the database is connected or not uses PDO
$dbinfo = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
if (!$DBCONNECT = new PDO($dbinfo, DB_USER, DB_PASS)) {
    die("Failed! Unable to connect to the database! Please try again.");
}

//----------------------------------------------------------------------

// Connection to the database - Second Type mainly for the products on the home page
$servername = "localhost";
$username = "u-210122134";
$password = "muubP681O4ELHGh";
$dbname = "u_210122134_healthcare";

// If statement used to tell if the database is connected or not uses SQLI
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>