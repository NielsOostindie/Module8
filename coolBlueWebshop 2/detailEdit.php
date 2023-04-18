<?php

include 'connection.php';

try {

    $stmt = $conn->prepare("SELECT webshopContent.*, photo.id as pID, photo.url, photo.orderBy FROM webshopContent INNER JOIN photo ON webshopContent.ID = photo.productID WHERE webshopContent.ID = " . $_GET["ID"] . " ORDER BY photo.orderBy ASC");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $images = array();
    foreach ($stmt->fetchAll() as $k => $v) {
        $images[$v['pID']] = $v['url'];
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>edit panel</title>
    <link rel="icon" href="../assets/logo.png" />
    <link rel="stylesheet" href="post.css">
</head>

<form action="post.php" method="POST">
    <label>ID: </label> <input type="text" name="id" value="<?php echo ($v['ID']); ?>"> <br />
    <label>Naam: </label> <input type="text" name="name" value="<?php echo ($v['name']); ?>"> <br />
    <label>Prijs: </label> <input type="text" name="price" value="<?php echo ($v['price']); ?>"> <br />
    <label>inch: </label> <input type="text" name="inch" value="<?php echo ($v['inch']); ?>"> <br />
    <label>resolution: </label> <input type="text" name="resolution" value="<?php echo ($v['resolution']); ?>"> <br />
    <label>screenType: </label> <input type="text" name="screenType" value="<?php echo ($v['screenType']); ?>"> <br />
    <label>sound: </label> <input type="text" name="sound" value="<?php echo ($v['sound']); ?>"> <br />
    <label>hertz: </label> <input type="text" name="hertz" value="<?php echo ($v['hertz']); ?>"> <br />
    <input type="submit" value="save">
</form>

<hr>

<form action="postPhoto.php" method="POST">
    <label>fotos: </label> <br />
    <br />
    <?php foreach ($images as $id => $url) {
    ?>
        <img src="<?php echo ($url); ?>" alt=""> <br />
        <input type="text" name="url[<?php echo $id ?>]" value="<?php echo ($url); ?>"> <br />
        <br />
    <?php
    }
    ?>

    <input type="submit" value="save">
</form>



<script src="detail.js"></script>
</body>

</html>