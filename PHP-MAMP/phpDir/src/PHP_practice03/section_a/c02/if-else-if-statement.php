<?php
/* Write your code here */
$stock = "yes";
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p>
  <?php
  /* Write your code here */
  if( $stock == "yes"){
    echo "In Stock";
  }elseif ($stock == "coming soon"){
echo "Coming Soon";
  }else {
    echo "Not Available";
  }
  ?>

  </p>
</body>

</html>