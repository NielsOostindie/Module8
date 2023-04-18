<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$inch = $_POST['inch'];
$res = $_POST['res'];
$screen = $_POST['screen'];
$sound = $_POST['sound'];
$hertz = $_POST['hertz'];



$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=webshop", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE `webshopContent` SET `ID`='$id',`name`='$name',`price`='$price',`inch`='$inch',`resolution`='$res',`screenType`='$screen',`sound`='$sound',`hertz`='$hertz' WHERE ID = $id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

} catch (PDOException $e) {
}
header('Location: edit.php');