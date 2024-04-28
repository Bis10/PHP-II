<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values



 */

echo "Step 1:<br>";
function calculate($num1, $num2) {
    
    $result = $num1 + $num2; 
    
    
    return $result;
}
$calResult = calculate(5, 10);
echo "The sum of 5 and 10 is " . $calResult, "<br>";

echo "<br>Step 2: <br>";
function hello ($name){
	echo "Hello, $name !";
}
hello("Jack");
echo "<br>";
hello("Zuck");




	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>