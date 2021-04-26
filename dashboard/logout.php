<?php
include("functions/init.php");

session_destroy();
header("location: ../signin");

// redirect("login.php");
?>