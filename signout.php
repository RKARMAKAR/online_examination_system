<?php
session_start();
unset($_SESSION["rollnumber"]);
unset($_SESSION["password"]);
header("Location:index.php");
?>
