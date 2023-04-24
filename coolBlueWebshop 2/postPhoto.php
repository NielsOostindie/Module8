<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
var_dump($_POST);


$photo = $_POST['photo1'];


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=webshop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($_POST['url'] as $id => $url) {
        $sql = "UPDATE `photo` SET `url`='$url' WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

} catch (PDOException $e) {
}
header('Location: edit.php');
