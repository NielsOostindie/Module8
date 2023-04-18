<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>edit panel</title>
  <link rel="icon" href="../assets/logo.png" />
  <link rel="stylesheet" href="post.css" />
</head>

<table style="width:100%">
<tr>
    <th>ProductID</th>
    <th>ProductName</th> 
    <th>Price</th>
    <th>Inch's</th>
    <th>Resolution</th>
    <th>ScreenType</th>
    <th>Sound</th>
    <th>Hertz</th>
    <th>Edit</th>
    <th>save</th>
  </tr>
<?php

include 'connection.php';

try {

  $stmt = $conn->prepare("SELECT * FROM webshopContent ");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach ($stmt->fetchAll() as $k => $v) {
?>
  <tr>
  <form action="post.php" method="POST">
    <td style="width:5%"><input type="text" name="id" value="<?php echo ($v['ID']); ?>"></td>
    <td><input type="text" name="name" value="<?php echo ($v['name']); ?>"></td>
    <td style="width:5%"><input type="text" name="price" value="<?php echo ($v['price']); ?>"></td>
    <td style="width:5%"><input type="text" name="inch" value="<?php echo ($v['inch']); ?>"></td>
    <td style="width:10%"><input type="text" name="res" value="<?php echo ($v['resolution']); ?>"></td>
    <td style="width:10%"><input type="text" name="screen" value="<?php echo ($v['screenType']); ?>"></td>
    <td style="width:15%"><input type="text" name="sound" value="<?php echo ($v['sound']); ?>"></td>
    <td style="width:5%"><input type="text" name="hertz" value="<?php echo ($v['hertz']); ?>"></td>
    <td style="width:5%"><a href="detailEdit.php?ID=<?php echo($v['ID']) ?>">edit</a></td>
    <td style="width:5%"><input style="border: 1px solid black;" type="submit" value="save"></td>
    </form>
  </tr>
<?php

  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>
</table>

  <script src="detail.js"></script>
</body>

</html>