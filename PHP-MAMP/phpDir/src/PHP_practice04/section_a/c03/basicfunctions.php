<?php declare (strict_types = 1);

/**
 * Write your code here
 */
$chocolate = [
  "toffee" => ["price" => 3, "stock" => 12],
  "mints"  =>["price" => 2, "stock" => 26],
   "fudge" => ["price" => 8, "stock" => 8],
];
$tax = 20;
function getReorderMessage(int $stock): string {
  if ($stock > 10){
    return "No Reorder Necessary";
  }else{
    return "Reorder Necessary";
  }
};

function getTotalValue(int $quantity, float $price):float{
  return $quantity * $price;
}

function getTaxHold (float $price, int $quantity, int $tax):float{
  return ($price * $quantity) * ($tax / 100);
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <?php
    /**
     * Write your code here
     */
    foreach ($chocolate as $item => $data) { ?>
      <tr>
        <td><?= $item ?></td>
        <td><?= $data['stock'] ?></td>
        <td><?= getReorderMessage($data['stock']) ?></td>
        <td>€<?= getTotalValue($data['price'], $data['stock']) ?></td>
        <td>€<?= getTaxHold($data['price'], $data['stock'], $tax) ?></td>
      </tr>
      <?php }
    ?>
  </table>
</body>

</html>