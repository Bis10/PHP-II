<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  <!-- /* Write your code here */ -->
  <p> This is a lowercase <?= strtolower($text) ?></p>
  <p> This is a uppercase  <?= strtoupper($text) ?></p>
  <p> The number of character in 'Home sweet home' are: <?= strlen($text) ?></p>
  <p> The number of words in 'Home sweet home' are:  <?= str_word_count($text) ?></p>
</p>

<?php include 'includes/footer.php'; ?>