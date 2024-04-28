<?php
/* Write your code here */
$pricePerPack = 1.99;
$NumberOfPack = 10;
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    /* Write your code here */
    for($NumberOfPack = 10; $NumberOfPack <= 100; $NumberOfPack++){
      $TotalPrice = $pricePerPack * $NumberOfPack;
      $roundedTotalPrice = number_format($TotalPrice, 2);
      echo "The price of $NumberOfPack packs of candies cost". " $" .$roundedTotalPrice."<br>";
    }
    ?>
  </p>
</body>

</html>