<?php

// The point of the .htaccess file is to hide the important files, like the database connection and the functions file. 
session_start();

// Needs to be changed to 0!!! No errors will show on screen if it is set to 0.
ini_set("display_errors", 1);

// This file is used to make it hard for hackers, to try and get into the database as they wouldnt know how many files are beign used and how many files are being hidden
require "connectdb.php";
require "Functions.php"

?>