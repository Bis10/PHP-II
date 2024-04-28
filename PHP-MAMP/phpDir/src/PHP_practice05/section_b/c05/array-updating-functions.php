<?php
// Write your code here
$arrayItems= ["notebook", "pencil", "eraser"];
array_push($arrayItems, "scissors", "paper");
$arrayItems1= ["notebook", "pencil", "eraser", "scissors", "paper" ];
array_pop($arrayItems1);


?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>

<!-- // Write your code her -->
<p>The new array is <?= implode(", ", $arrayItems) ?></p>
<p>The new array is <?= implode(", ", $arrayItems1) ?></p>

<?php include 'includes/footer.php'; ?>