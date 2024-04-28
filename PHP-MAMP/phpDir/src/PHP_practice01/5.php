<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo "Step 1:<br>";
 echo(max(2,4,6,8) . "<br>");
 echo "Step 2:<br>";
	$str = "   Hello World !  ";
  echo trim($str). "<br>";

  echo "Step 3:<br>";
  $color =array("red","green","blue","yellow","brown");
print_r (array_slice($color,2));
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>