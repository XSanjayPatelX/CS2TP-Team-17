<?php

// Connection to the database - First Type
define('DB_NAME', 'healthcare');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

// If statement used to tell if the database is connected or not
$dbinfo = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
if (!$DBCONNECT = new PDO($dbinfo, DB_USER, DB_PASS)) {
    die("Failed! Unable to connect to the database! Please try again.");
}

//----------------------------------------------------------------------

// Connection to the database - Second Type
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

// If statement used to tell if the database is connected or not
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>