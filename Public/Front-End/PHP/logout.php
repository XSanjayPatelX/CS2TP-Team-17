<!-- PHP -->
<?php
// Getting files from the private folder
require "../../../Private/Back-End/backendcon.php";

// After clicking logout the user will be redirected to the home page
session_destroy();
header("Location: index.php#home");
exit;
?>