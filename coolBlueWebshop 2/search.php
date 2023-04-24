<?php

include 'connection.php';
$zoektermstring = $_GET['zoek'];

$zoektermen = explode(' ',$zoektermstring);


session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CoolBlue</title>
  <link rel="icon" href="./assets/logo.png" />
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
</head>

<body>

  <section id="home"></section>
  <div class="navBar">
    <div id="topBar">

      <div id="searchbar">
        <form action="search.php" method="GET">
          <input type="text" name="zoek" id="search" placeholder="Search...">
        </form>
        <a href="#search"> <img id="searchIcon" src="../coolBlueWebshop 2/assets/searchIcon.png"> </a>

      </div>
      <a href="winkelmand.php"> <img id="cartIcon" src="../coolBlueWebshop 2/assets/cartIcon.png"></a>
      <form id="inlogText" action="inlog.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
      </form>
      <?php
      if (isset($_SESSION["emailadres"])) {
        echo $_SESSION["emailadres"];
      }
      ?>
    </div>
    <div id="coolBlue">
      <svg class="header__logo-image" viewBox="0 0 83 52" focusable="false" aria-hidden="true">
        <path d="M41.3 65.5C18.5 65.5 0 47.1 0 24.3 0 1.6 18.5-16.9 41.3-16.9 64-16.9 82.5 1.6 82.5 24.3 82.5 47.1 64 65.5 41.3 65.5Z" fill="#F60"></path>
        <path d="M19.8 24.8C20 24.8 20.1 24.8 20.3 24.9 20.4 25 20.4 25.2 20.5 25.3L20.5 25.3 20.5 25.4C20.5 25.4 20.5 25.4 20.5 25.4L20.5 25.4 20.5 29.6C21 29.4 21.5 29.3 22.2 29.1 22.8 29 23.5 29 24.3 29 25.7 29 26.9 29.1 27.9 29.4 28.8 29.7 29.6 30.2 30.2 30.7 30.8 31.3 31.3 32 31.6 32.9 31.8 33.7 32 34.7 32 35.8 32 36.9 31.9 37.9 31.6 38.7 31.3 39.6 30.9 40.3 30.3 40.8 29.7 41.4 28.9 41.8 27.9 42.1 27 42.4 25.8 42.6 24.4 42.6 23.6 42.6 22.9 42.5 22.2 42.3 21.6 42.2 21 42 20.5 41.8L20.5 41.8 20.4 42.2C20.4 42.4 20.4 42.5 20.3 42.5 20.1 42.5 17 42.5 17 42.5 16.9 42.5 16.7 42.5 16.6 42.4 16.4 42.2 16.4 42.1 16.4 41.9L16.4 41.9 16.4 25.4C16.4 25.2 16.4 25.1 16.6 24.9 16.7 24.8 16.8 24.8 17 24.8L17 24.8ZM65.1 38.4C65.2 38.4 65.3 38.5 65.4 38.6L65.4 38.6 66.4 39.9C66.6 40.1 66.6 40.1 66.6 40.2 67 40.6 66.3 41.1 66.3 41.1 65.8 41.4 65.5 41.5 65.2 41.7 64.8 41.9 64.3 42.1 63.9 42.2 63.5 42.3 63 42.4 62.5 42.5 62 42.5 61.4 42.5 60.7 42.5 59.1 42.5 57.8 42.4 56.9 42 55.9 41.6 55.1 41.1 54.6 40.5 54.1 39.9 53.7 39.2 53.5 38.4 53.3 37.6 53.2 36.7 53.2 35.8 53.2 34.9 53.3 34 53.5 33.2 53.7 32.4 54.1 31.6 54.6 31 55.2 30.4 55.9 29.9 56.9 29.5 57.9 29.2 59.1 29 60.6 29 61.7 29 62.6 29.1 63.3 29.3 64 29.5 64.6 29.8 65.1 30.1 65.6 30.5 66 30.9 66.2 31.4 66.5 31.9 66.7 32.4 66.8 33 66.9 33.6 67 34.2 67 34.9 67 35.6 67 36.3 67 37L67 37 59.4 37C59 37 59 36.7 59 36.7L59 34.8C59 34.8 59.1 34.4 59.4 34.4L59.4 34.4 63.4 34.4C63.4 34.1 63.3 33.7 63.2 33.4 63.2 33.1 63 32.8 62.8 32.6 62.6 32.4 62.3 32.2 62 32.1 61.6 31.9 61.1 31.9 60.5 31.9L60.5 31.9 60.2 31.9C59.7 31.9 59.3 32 59 32.1 58.5 32.2 58.2 32.4 57.9 32.6 57.7 32.8 57.5 33.1 57.3 33.4 57.2 33.7 57.1 34 57 34.4 57 34.4 56.9 35.9 57 37 57.1 37.4 57.2 37.8 57.3 38.1 57.5 38.4 57.7 38.7 58 38.9 58.3 39.1 58.6 39.3 59 39.4 59.5 39.6 60 39.6 60.7 39.6L60.7 39.6 60.9 39.6C61.4 39.6 61.7 39.6 62 39.5 62.4 39.5 62.7 39.4 63 39.3 63.3 39.2 63.6 39.1 63.8 39 64 38.8 64.3 38.7 64.6 38.5 64.7 38.4 64.9 38.3 65 38.3L65 38.3ZM36.6 24.7C36.7 24.7 36.9 24.7 37 24.9 37.1 25 37.2 25.1 37.2 25.3L37.2 38.2C37.2 38.6 37.2 38.6 37.2 38.9L37.6 38.9C37.7 38.9 37.9 38.9 38 39.1 38.1 39.2 38.2 39.3 38.2 39.5L38.2 41.9C38.2 42 38.1 42.2 38 42.3 37.9 42.4 37.7 42.5 37.6 42.5L33.9 42.5C33.7 42.5 33.5 42.4 33.4 42.3 33.3 42.1 33.2 42 33.2 41.8L33.2 25.3C33.2 25.1 33.2 25 33.4 24.9 33.5 24.7 33.6 24.7 33.8 24.7L36.6 24.7ZM42.3 29C42.5 29 42.7 29.1 42.8 29.2 42.9 29.3 43 29.4 43 29.6L43 36.1C43 36.5 43 37 43 37.4 43 37.7 43.1 38.1 43.3 38.4 43.5 38.6 43.8 38.8 44.1 39 44.5 39.2 45 39.2 45.7 39.2 46.3 39.2 46.8 39.2 47.2 39 47.6 38.8 47.8 38.6 48 38.3 48.2 38.1 48.3 37.7 48.3 37.3 48.3 36.9 48.4 36.5 48.4 36L48.4 29.6C48.4 29.4 48.4 29.3 48.5 29.2 48.7 29.1 48.8 29 49 29L51.4 29C51.5 29 51.7 29.1 51.8 29.2 51.9 29.3 52 29.4 52 29.6L52 36C52 37.1 51.9 38.1 51.7 38.9 51.5 39.8 51.2 40.4 50.7 40.9 50.3 41.5 49.6 41.8 48.8 42.1 48 42.3 46.9 42.5 45.7 42.5 44.4 42.5 43.3 42.3 42.5 42.1 41.7 41.8 41 41.5 40.5 40.9 40 40.4 39.7 39.8 39.5 38.9 39.3 38.1 39.2 37.1 39.2 36L39.2 29.6C39.2 29.4 39.3 29.3 39.4 29.2 39.6 29.1 39.7 29 39.9 29L42.3 29ZM24.3 32.2C23.6 32.2 23.1 32.3 22.6 32.4 22.2 32.6 21.8 32.9 21.5 33.2 21.3 33.5 21.1 33.9 21 34.4 20.8 34.8 20.8 35.3 20.8 35.9 20.8 36.4 20.8 36.9 21 37.4 21.1 37.8 21.3 38.2 21.5 38.5 21.8 38.8 22.2 39.1 22.6 39.3 23.1 39.4 23.6 39.5 24.3 39.5 25 39.5 25.6 39.4 26.1 39.3 26.5 39.1 26.9 38.8 27.2 38.5 27.4 38.2 27.6 37.8 27.7 37.4 27.8 36.9 27.9 36.4 27.9 35.9 27.9 35.3 27.8 34.8 27.7 34.4 27.6 33.9 27.4 33.5 27.2 33.2 26.9 32.9 26.5 32.6 26.1 32.4 25.6 32.3 25 32.2 24.3 32.2ZM23.5 10.1C24.2 10.1 24.8 10.1 25.3 10.1 25.9 10.2 26.4 10.3 26.8 10.4 27.2 10.5 27.7 10.7 28.1 10.9 28.5 11.1 28.7 11.2 29.2 11.6 29.2 11.6 29.9 12 29.5 12.5 29.5 12.6 29.5 12.6 29.3 12.8L29.3 12.8 28.3 14.1C28.2 14.2 28.1 14.3 27.9 14.3 27.8 14.3 27.6 14.3 27.5 14.2 27.2 14 26 13 23.5 13 21.7 13 19.2 14.1 19.2 16.6 19.2 19.1 21.5 20.2 23.5 20.2 26.2 20.2 27.2 19.2 27.5 19L27.6 19C27.7 18.9 27.8 18.9 27.9 18.9 28.1 18.9 28.2 19 28.3 19.1L28.3 19.1 29.3 20.4C29.5 20.6 29.5 20.6 29.5 20.7 29.9 21.2 29.2 21.6 29.2 21.6 28.7 22 28.5 22.1 28.1 22.3 27.7 22.5 27.2 22.7 26.8 22.8 26.4 22.9 25.9 23 25.3 23.1 24.8 23.1 24.2 23.1 23.5 23.1 21.9 23.1 20.7 22.9 19.7 22.6 18.7 22.2 15.5 20.6 15.5 16.5 15.5 12.5 18.7 11 19.7 10.6 20.7 10.3 21.9 10.1 23.5 10.1ZM37.6 10.1C38.9 10.1 40 10.2 41 10.5 41.9 10.8 42.6 11.2 43.2 11.8 43.8 12.3 44.3 13 44.5 13.8 44.8 14.6 44.9 15.5 44.9 16.6 44.9 17.6 44.8 18.6 44.5 19.4 44.3 20.2 43.8 20.9 43.2 21.4 42.6 22 41.9 22.4 41 22.7 40 23 38.9 23.1 37.6 23.1 36.3 23.1 35.1 23 34.2 22.7 33.3 22.4 32.5 22 32 21.4 31.4 20.9 30.9 20.2 30.7 19.4 30.4 18.6 30.3 17.6 30.3 16.6 30.3 15.5 30.4 14.6 30.7 13.8 30.9 13 31.4 12.3 32 11.8 32.5 11.2 33.3 10.8 34.2 10.5 35.1 10.2 36.3 10.1 37.6 10.1ZM53.5 10.1C54.8 10.1 56 10.2 56.9 10.5 57.8 10.8 58.6 11.2 59.2 11.8 59.7 12.3 60.2 13 60.4 13.8 60.7 14.6 60.8 15.5 60.8 16.6 60.8 17.6 60.7 18.6 60.4 19.4 60.2 20.2 59.7 20.9 59.2 21.4 58.6 22 57.8 22.4 56.9 22.7 56.1 22.9 55.1 23.1 53.9 23.1L53.5 23.1 53.5 23.1C52.2 23.1 51.1 23 50.1 22.7 49.2 22.4 48.5 22 47.9 21.4 47.3 20.9 46.9 20.2 46.6 19.4 46.3 18.6 46.2 17.6 46.2 16.6 46.2 15.5 46.3 14.6 46.6 13.8 46.9 13 47.3 12.3 47.9 11.8 48.5 11.2 49.2 10.8 50.1 10.5 51.1 10.2 52.2 10.1 53.5 10.1ZM65.3 6.1C65.5 6.1 65.6 6.1 65.8 6.3 65.9 6.4 65.9 6.5 65.9 6.6L65.9 19.2C65.9 19.4 65.9 19.4 65.9 19.6L66.3 19.6C66.5 19.7 66.6 19.7 66.7 19.8 66.8 19.9 66.9 20 66.9 20.2L66.9 22.5C66.9 22.7 66.8 22.8 66.7 22.9 66.6 23 66.5 23.1 66.3 23.1L62.8 23.1C62.6 23.1 62.4 23 62.3 22.9 62.2 22.8 62.1 22.6 62.1 22.5L62.1 6.6C62.1 6.5 62.2 6.4 62.3 6.3 62.4 6.1 62.5 6.1 62.7 6.1L65.3 6.1ZM37.6 13.1C36.9 13.1 36.4 13.2 35.9 13.4 35.5 13.5 35.1 13.8 34.9 14.1 34.6 14.4 34.4 14.8 34.3 15.2 34.2 15.7 34.2 16.1 34.2 16.7 34.2 17.2 34.2 17.7 34.3 18.1 34.4 18.6 34.6 19 34.9 19.3 35.1 19.6 35.5 19.8 35.9 20 36.4 20.2 36.9 20.3 37.6 20.3 38.3 20.3 38.8 20.2 39.3 20 39.7 19.8 40 19.6 40.3 19.3 40.6 19 40.8 18.6 40.9 18.1 41 17.7 41 17.2 41 16.7 41 16.1 41 15.7 40.9 15.2 40.8 14.8 40.6 14.4 40.3 14.1 40 13.8 39.7 13.5 39.3 13.4 38.8 13.2 38.3 13.1 37.6 13.1ZM53.5 13.1C52.8 13.1 52.3 13.2 51.9 13.4 51.4 13.5 51.1 13.8 50.8 14.1 50.5 14.4 50.4 14.8 50.3 15.2 50.2 15.7 50.1 16.1 50.1 16.7 50.1 17.2 50.2 17.7 50.3 18.1 50.4 18.6 50.5 19 50.8 19.3 51.1 19.6 51.4 19.8 51.9 20 52.3 20.2 52.8 20.3 53.5 20.3 54.2 20.3 54.7 20.2 55.2 20 55.6 19.8 56 19.6 56.2 19.3 56.5 19 56.7 18.6 56.8 18.1 56.9 17.7 56.9 17.2 56.9 16.7 56.9 16.1 56.9 15.7 56.8 15.2 56.7 14.8 56.5 14.4 56.2 14.1 56 13.8 55.6 13.5 55.2 13.4 54.7 13.2 54.2 13.1 53.5 13.1Z" fill="#FFF"></path>
      </svg>
    </div>
  </div>

  <div class="content">
    <div class="filters">
      <form action="filter.php" method="POST">

      <div id="resFilter">
          <p id="res">Resolutie</p>
          <input type="checkbox" name="8k" id="8k">
          <label for="8k">8k (UltraHD)</label> <br>
          <input type="checkbox" name="4k" id="4k">
          <label for="4k">4k (UltraHD)</label> <br>
          <input type="checkbox" name="1080p" id="1080p">
          <label for="1080p">1080p (Full HD)</label>
      </div>

      <div id="sizeFilter">
          <p id="size">Beeld groten</p>
          <input type="checkbox" name="inch 65" id="65Inch" onChange="this.form.submit()">
          <label for="65Inch">65 inch (165cm)</label>
<br>
          <input type="checkbox" name="inch 55" id="55Inch" onChange="this.form.submit()">
          <label for="55Inch">55 inch (140cm)</label>
<br>
          <input type="checkbox" name="inch 50" id="50Inch" onChange="this.form.submit()">
          <label for="50Inch">50 inch (127cm)</label>
<br>
          <input type="checkbox" name="inch 43" id="43Inch" onChange="this.form.submit()">
          <label for="43Inch">43 inch (109cm)</label>
<br>
          <input type="checkbox" name="=inch 32" id="32Inch" onChange="this.form.submit()">
          <label for="32Inch">32 inch (81cm)</label>
      </div>

      <div id="geluidFilter">
          <p id="geluid">Geluidskwaliteit</p>
          <input type="checkbox" name="sound standaard" id="standaard">
          <label for="standaard">Standaard</label> <br>
          <input type="checkbox"  name="sound goed" id="goed">
          <label for="goed">Goed</label> <br>
          <input type="checkbox" name="sound zeergoed" id="zeergoed">
          <label for="zeergoed">Zeer Goed</label> <br>
          <input type="checkbox" name="sound uitstekend" id="uitstekend">
          <label for="uitstekend">Uitstekend</label>
      </div>

      <div id="hzFilter">
          <p>Verversingssnelheid</p>
          <input type="checkbox" name="100hz" id="100hz">
          <label for="100hz">100hz</label> <br>
          <input type="checkbox" name="50hz" id="50hz">
          <label for="50hz">50hz</label>
      </div>


      <div id="pannelFilter">
          <p id="pannel">Scherm type</p>
          <input type="checkbox" name="led" id="led-lcd">
          <label for="led-lcd">LED-LCD</label> <br>
          <input type="checkbox" name="oled" id="oled">
          <label for="oled">OLED</label>
          <br>
          <input type="submit" id="submit" value="Filter">
        </form>
      </div>
    </div>
  </div>



  <div class="product-list">


    <?php

    try {

        $sql = "SELECT * FROM `webshopContent` where";

        $wheres = array();

        foreach($zoektermen as $zoekterm){
            $wheres[]=" name LIKE '%$zoekterm%' or inch like '%$zoekterm%' or resolution LIKE '%$zoekterm%' or sound LIKE '%$zoekterm%' or hertz LIKE '%$zoekterm%' or price LIKE '%$zoekterm%'";
        };

        $wherestring = join(' or ' , $wheres);
        $sql.=$wherestring;

      $stmt = $conn->prepare($sql);
      $stmt->execute();

    //   $sql="SELECT * FROM `webshopContent` where name LIKE'%$zoekterm%'";

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach ($stmt->fetchAll() as $k => $v) {
        //print_r($v);
    ?>
        <div class="product" id="product">
          <form action="winkelmand.php" method="GET">
            <input type="hidden" name="tv" value="<?php echo($v['name']); ?>">
            <a href="detail.php?ID=<?php echo($v['ID']) ?>"><img class="tv <?php echo ($v['stock'] == false) ? 'outOfStock' : ''; ?>" src="<?php echo($v['img']); ?>"></a>
            <p id="stock" > <?php echo ($v['stock'] == false) ? 'Niet meer leverbaar' : ''; ?></p>
            <p class="productColor"><?php echo ($v['name']); ?></p>
            <li><?php echo($v['resolution']); ?></li>
            <li><?php echo($v['screenType']); ?></li>
            <li><?php echo($v['sound']); ?></li>
            <li>Verversingssnelheid <?php echo($v['hertz']); ?> Hz</li>
            <p class="prijs"><?php echo($v['price']); ?>,-</p>
            <a href="edit.php?ID=<?php echo($v['ID']) ?>">edit</a>
            <a href="delete.php?ID=<?php echo($v['ID']) ?>">delete</a>
            <input type="submit" class="cardButton">
            <p class="delivery">Morgen bezorged</p>
          </form>
        </div>
    <?php
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;

    ?>


  </div>

  <div id="footer">
    <img src="../coolBlueWebshop 2/assets/homeIcon.png" id="homeIcon">
    <a href="#home" class="scroll">Home</a> <br>
    <img src="../coolBlueWebshop 2/assets/infoIcon.png" id="infoIcon">
    <a href="#about" class="scroll">About</a> <br>
    <img src="../coolBlueWebshop 2/assets/contactIcon.png" id="contactIcon">
    <a href="#contact" class="scroll">Contact</a>
  </div>

  <div id="trustedPartners">
    <img src="../coolBlueWebshop 2/assets/PayPalLogo.png" id="payPal">
    <img src="../coolBlueWebshop 2/assets/idealLogo.png" id="iDeal">
    <img src="../coolBlueWebshop 2/assets/masterCardLogo.png" id="masterCard">
    <img src="../coolBlueWebshop 2/assets/visaLogo.png" id="visa">
    <img src="../coolBlueWebshop 2/assets/postNLlogo.png" id="postNl">
  </div>
  <p id="copyRight">© Copyright Niels Oostindie</p>
</body>

</html>