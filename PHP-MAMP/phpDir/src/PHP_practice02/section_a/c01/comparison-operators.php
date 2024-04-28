<?php

/* 
  Write you php code here

   */
  $candyInStore = 10;
  $candyWanted = 5;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p><?php
  if ($candyWanted <= $candyInStore) {
    echo "1.";
  } else {
    echo " ";
  }
  ?></p>

</body>

</html>