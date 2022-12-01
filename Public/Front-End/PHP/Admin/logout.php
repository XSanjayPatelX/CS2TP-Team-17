<?php
// Getting files from the private folder (NOT WORKING)
require "../../../../Private/Back-End/backendcon.php";

session_destroy();
header("Location: adminlog.php");
exit;
?>