<?php

include 'connection.php';

try {

    $stmt = $conn->prepare("DELETE FROM webshopContent where ID = :ID");
    $stmt->bindParam(':ID', $ID);
    $ID = $_GET['ID'];
    $stmt->execute();
    $stmt = $conn->prepare("DELETE FROM photos where productID = :productID");
    $stmt->bindParam(':productID', $productID);
    $productID = $_GET['ID'];
    $stmt->execute();
  
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  header('Location: index.php');