<?php

/* 
  Write you php code here

   */
  $nutrition = array(
    "fat" => "30%", 
    "sugar" => "40%", 
    "salt" => "10%");
    //Updating arrays.
    $nutrition = array(
      "fat" => "20%", 
    "sugar" => "50%", 
    "salt" => "10%"
    );

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>FAT contains <?php echo $nutrition["fat"];?>
  <p>SUGAR contains <?php echo $nutrition["sugar"];?>
  <p>SALT contains <?php echo $nutrition["salt"];?></P>

</body>

</html>