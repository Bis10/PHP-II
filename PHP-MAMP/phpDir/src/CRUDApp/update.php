<?php include 'db.php';

// $stmt_select = $conn->prepare("SELECT id FROM users"); //Can be done this ways with prepared statment too.
// $stmt_select->execute();
// $result_select = $stmt_select->get_result();
// if (!$result_select) {
//   die('Query failed');
// }

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  //Update the records in db
  $stmt_update = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $stmt_update->bind_param("ssi", $username, $hashedPassword, $id);
  if (!$stmt_update->execute()) {
    die("Update query failed" . $stmt_update->error);
  } else {
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
  }
  $stmt_update->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD App</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <select name="id" id="">
      <?php
      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">

  </form>

</body>

</html>
