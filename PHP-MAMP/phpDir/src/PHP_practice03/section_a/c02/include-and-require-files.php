<?php
/* Write your code here */
$stock = 3;
if ($stock >= 10) {
    $message = "Good availability";
} elseif ($stock > 0 && $stock < 10) {
    $message = "Low stock";
} else {
    $message = "Out of stock";
}
?>


<h2>Chocolate</h2>
<?php
/* Write your code here */
require_once "includes/header.php";
?>
<p><?= $message ?></p>
<?php include "includes/footer.php" ?>
