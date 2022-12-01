<?php
require "../../../Private/Back-End/backendcon.php";

session_destroy();

header("Location: index.php#home");
exit;
?>