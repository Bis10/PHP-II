<?php
// Write PHP code here
$arrayGreetings = ["Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];
$randomArray = array_rand($arrayGreetings);
$bestSellers = [
    "notebook" => 143, 
    "pencil" => 132,
     "ink" => 421
];
$highestSales = max($bestSellers);
$customersDetails = [
    [

    "firstname" => "David",
    "lastname" => "River",
    "email" => "riverdavid@gmail.com",
],
[

    "firstname" => "Neil",
    "lastname" => "Frank",
    "email" => "neilfrank@gmail.com"
]
];
$firstNames = array_column($customersDetails, "firstname");
$randomIndex = array_rand($firstNames);
$randomFirstName = $firstNames[$randomIndex];




?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<!-- //Write code here -->
<p>These are random greetings "<?= $arrayGreetings[$randomArray] ?>" </p>
<p>
<?php 
foreach ($bestSellers as $book => $salesValue) {
    if ($salesValue == $highestSales) {
        echo "The book '$book' has the highest sales: $highestSales\n";
    }
}
?>
</p>
<p>
<?=$randomFirstName = $firstNames[$randomIndex] ."\n" .$arrayGreetings[$randomArray]  ?>
</p>




<?php include 'includes/footer.php'; ?>