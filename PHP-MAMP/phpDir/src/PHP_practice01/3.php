<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
echo "Step 1:<br>";
$i = "PHP";
if ($i == "Javascript") {
    echo "I love Javascript";
} elseif ($i == "React") {
    echo "I love React";
} else {
    echo "I love PHP<br><br>";
}
echo "Step 2:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br><br>";
}
 echo "Step 3:<br>";

$name = "A";
switch ($name) {
    case "A":
        echo "Name is Ram.";
        break;
    case "B":
        echo "Name is B";
        break;
    case "C":
        echo "Name is C";
        break;
    case "D":
        echo "Name is D";
        break;
    case "E":
        echo "Name is E";
        break;
    default:
        echo "Name is not A, B, C, D, or E";
}
?>







</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>