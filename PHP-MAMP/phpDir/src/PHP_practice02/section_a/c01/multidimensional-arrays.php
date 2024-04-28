<?php

/* 
  Write you php code here

   */
  $offers = array (
array ( "name" => "milk", "price" => 0.99, "stock" => 100),
array ( "name" => "potato", "price" => 1, "stock" => 990),
array ( "name" => "chicken", "price" => 2.99, "stock" => 550)
);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <?php
// foreach ($offers as $offer) {
//     echo "<p>" . $offer["name"] . " - €" . $offer["price"] . "</p>";
// }
?>
<?php

echo "<p>" . $offers[0]["name"] . " - €" . $offers[0]["price"] . "</p>";
echo "<p>" . $offers[1]["name"] . " - €" . $offers[1]["price"] . "</p>";
echo "<p>" . $offers[2]["name"] . " - €" . $offers[2]["price"] . "</p>";
?>

?>

  


</body>

</html>