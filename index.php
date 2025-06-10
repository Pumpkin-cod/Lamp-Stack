<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'db.php'; // Ensure $pdo is defined before use

?>
<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
</head>

<body>
    <h1>All Users</h1>
    <a href="create.php">Add New User</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        try {
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
        } catch (PDOException $e) {
            echo "<tr><td colspan='4'>Error: " . $e->getMessage() . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>