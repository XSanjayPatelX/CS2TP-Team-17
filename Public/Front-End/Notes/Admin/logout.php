<?php
require "../../../../Private/Back-End/backendcon.php";

session_destroy();

header("Location: adminlog.php");
exit;
?>