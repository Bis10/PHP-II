<?php

/* 
  Write you php code here

   */
  $nutrition = [
    "fat" => "30%",
    "sugar" => "40%",
    "salt" => "10%"
  ];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat <?php echo $nutrition ["fat"];?></p>
  <p>Sugar <?php echo $nutrition ["sugar"];?> </p>
  <p>Salt <?php echo $nutrition ["salt"];?> </p>

</body>

</html>