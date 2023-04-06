<?php
session_start();
?>

<?php
$_SESSION["ingelogd"] = true;
$_SESSION["emailadres"] = $_POST ["email"];
$_SESSION["password"] = $_POST ["password"];
print_r($_SESSION);
?>