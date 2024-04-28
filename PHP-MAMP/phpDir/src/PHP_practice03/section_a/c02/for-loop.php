<?php
/* Write your code here */
$PricePerPack = 1.99;
$NumberOfPack = 0;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    for ($NumberOfPack = 1; $NumberOfPack <= 10; $NumberOfPack++) {
      $TotalPrice = $PricePerPack * $NumberOfPack;
      $RoundedTotalPrice = number_format($TotalPrice, 2);
      echo "The total price of $NumberOfPack pack(s) is $" . $RoundedTotalPrice . "<br>";
    }
    ?>
  </p>
</body>

</html>