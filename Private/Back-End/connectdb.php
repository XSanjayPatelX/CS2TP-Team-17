<?php

// Connection to the database
define('DB_NAME', 'healthcare');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

// If statement used to tell if the database is connected or not
$dbinfo = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
if (!$DBCONNECT = new PDO($dbinfo, DB_USER, DB_PASS)) {

    die("Failed to connect!");

}

?>