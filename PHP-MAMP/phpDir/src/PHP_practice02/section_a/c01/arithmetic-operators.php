<?php

/* 
  Write you php code here

   */
  $marabou = 5;
  $fazer = 5;
  $geisha = 5;
  $subTotal = $marabou + $fazer + $geisha;
  $tax = $subTotal * 0.20; 
  $totalWithTax = $subTotal + $tax;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p> <?php echo "Subtotal: €". $subTotal; ?></p>
  <p> <?php echo "Tax: €". $tax; ?></p>
  <p> <?php echo "Total Amount: €". $totalWithTax; ?></p>

</body>

</html>