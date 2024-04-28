<?php include 'db.php';
if(isset($_POST['submit'])){
    // echo "yes, we received data";
    $user = $_POST['username'];
    $pass = $_POST['password'];

// validate the form
if(!empty($user) && !empty($pass)){
    $stmt = $conn->prepare("INSERT INTO users(username, password)VALUES(?, ?)");
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
    $stmt->bind_param("ss", $user, $hashedPassword);
    if($stmt->execute()){
        header("Location:" .$_SERVER["PHP_SELF"]);
        exit();
    }else{
        die("Query insertion failed");
    }
    $stmt->close();
}else{
    echo "Username and password cannot be empty.";
}
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
<form action="create.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username">
    <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
</form>
</body>

