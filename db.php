  GNU nano 7.2                      db.php                                
<?php
$host = 'lamp-database-1-instance-1-eu-west-1b.cv2ueq6sqd4i.eu-west-1.rds.amazonaws.com';
$db = 'lamp_app';
$user = 'admin';
$pass = 'mypassword';
$charset = 'utf8mb4'; 

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connected successfully to Aurora!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
