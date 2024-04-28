<?php
/* Write your code here */
$day= "tuesday";
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p>
  <?php
  /* Write your code here */
  switch($day){

    case "monday":
     echo "20% off chocolates on Monday.";
     break;
     case "tuesday":
      echo "20% off mints on Tuesday.";
      break;
      default:
      echo "Buy three packs, get one free.";
     }
  ?>

  </p>
</body>

</html>