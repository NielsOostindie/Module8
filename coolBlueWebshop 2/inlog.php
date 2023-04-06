<?php
session_start();

$_SESSION["ingelogd"] = true;
$_SESSION["emailadres"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
header("Location: index.php");
?>