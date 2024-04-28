<?php include 'db.php';
// $stmt = $conn->prepare("SELECT * FROM users");
// $stmt->execute();
// $result = $stmt->get_result(); // this can be done with the prepared statement too.
// if(!$result){
//   die("Query failed");
// }
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Query failed");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  //Delete the records in db
  $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
  
  if (!$stmt->execute()) {
    die("Delete query failed".$stmt->error); 
  }else{
    echo "Record deleted!";
  }
  $stmt->close();
  $conn->close();
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
  <form action="delete.php" method="post">

    <label for="username"> Username </label>
    <input type="text" name="username">
    <label for="password"> Password </label>
    <input type="password" name="password">
    <select name="id" id="">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="DELETE">

  </form>


</body>

</html>
