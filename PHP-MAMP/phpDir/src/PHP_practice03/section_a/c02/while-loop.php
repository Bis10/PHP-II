<?php
/* Write your code here */
$pricePerPack = 1.99;
$numberOfPack = 5;
$counter = 1;

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    while ($counter <= $numberOfPack) {
      $totalPrice = $pricePerPack * $counter;
      $fixedTotalPrice = number_format($totalPrice, 2);
      echo "Price for $numberOfPack packs of candy: $" . $fixedTotalPrice . "<br>";
      $counter++;
    }

    ?>
  </p>
</body>
</html>