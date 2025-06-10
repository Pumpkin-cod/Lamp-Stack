<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  try {
    $stmt = $pdo->prepare("INSERT INTO users (username, password, name, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $password, $name, $email]);
    header("Location: index.php");
    exit();
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Add New User</title>
</head>

<body>
  <form method="POST">
    <h2>Add New User</h2>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Create</button>
  </form>
</body>

</html>