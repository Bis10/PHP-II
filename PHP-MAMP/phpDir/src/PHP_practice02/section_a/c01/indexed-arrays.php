<?php

/* 
  Write you php code here

   */
  $best_sellers = ["Chocolate", "Mints", "Fudge", "Bubble gum", "Toffee", "Jelly Beans"];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
<p><?php 
echo $best_sellers[0];?> <br>
<?php echo $best_sellers[2];?> <br>
<?php echo $best_sellers[5]; ?></p>
</body>

</html>