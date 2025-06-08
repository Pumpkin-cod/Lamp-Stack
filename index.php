  GNU nano 7.2                     index.php                              
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>User List</title></head>
<body>
<h1>All Users</h1>
<a href="create.php">Add New User</a>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
<?php
$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='update.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>
</body>
</html>
