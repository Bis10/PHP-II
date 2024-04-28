<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">





		<!-- /*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/ -->
  <!-- <a href="9.php?user=jones&password=spiderman1234">Click Here<br></a> -->

  <?php
// if(isset($_GET['user']) && (isset($_GET['password']))){
//   $user = $_GET['user'];
//   $password = $_GET['password'];
//   echo "user: $user<br>";
//   echo "password: $password<br>";
// }

// $expiration_time = time()+(7 * 24 * 60 * 60);
// setcookie('user_name', 'jones', $expiration_time);
// if(isset($_COOKIE['user_name'])){
//   $user_name = $_COOKIE['user_name'];
//   echo "user_name" .$user_name;
// }


// session_start();
// $_SESSION['user'] = 'spiderman';
// echo "The session has started:" .$_SESSION['user'];

		?>







  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>