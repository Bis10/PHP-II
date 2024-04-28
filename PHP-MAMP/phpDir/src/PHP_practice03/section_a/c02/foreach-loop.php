<?php
/* 
    Write your code here
     */
    $candyProducts = array(
      "Toffee" => 2.99,
      "Mints" => 1.99, 
      "Fudge" => 3.49
    );
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    /* 
    Write your code here
     */
    foreach($candyProducts as $item => $price ) { ?>
      <tr>
          <td><?php echo $item; ?></td>
          <td><?php echo $price; ?></td>
      </tr>
  <?php } ?>
  </table>
</body>

</html>