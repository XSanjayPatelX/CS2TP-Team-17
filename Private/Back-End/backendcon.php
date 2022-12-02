<?php
session_start();

// Should be kept on 0 to hide errors
ini_set("display_errors", 0);

// Used to keep files hidden and unaccessible from anyone
require "connectdb.php";
require "functions.php";
require "adminfunctions.php";
?>