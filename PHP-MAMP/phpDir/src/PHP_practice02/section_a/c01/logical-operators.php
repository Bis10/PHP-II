<?php 
$candy = "fazer";
$stock = 20;
$order = 10;
$delivery = "yes";
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Logical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h1>Shopping Cart</h1>
    <?php 
    if ($wanted <= $stock && ($delivery == "yes"));
    ?>
    <p>Candy:    <?= $candy ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Ordered: <?= $order ?></p>
    <p>Delivery: <?= $delivery ?></p>
  </body>
</html>