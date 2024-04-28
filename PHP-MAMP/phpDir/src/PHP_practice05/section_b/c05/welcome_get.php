<html>

<body>
<?php
 
 if(isset($_GET["name"]) && isset($_GET["email"])) {
  
   $_GET["name"]; // OR $name = $_GET["name"];
   $_GET["email"];
} else {
  $_GET["name"] = ""; // OR $name = "";
   $_GET["email"] = "";
}
?>
<?php
$_GET["name"] = "Ram"; // Or $name = "Ram";
$_GET["email"] = "ram123@gmail.com";
 ?>
<!-- Or echo $name; -->
  Welcome <?php echo $_GET["name"]; ?><br> 
  Your email address is: <?php echo $_GET["email"]; ?>

</body>

</html>