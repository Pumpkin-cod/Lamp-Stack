  GNU nano 7.2                      db.php                                
<?php
$host = 'lampdb-instance-1.ctegasi6yx37.eu-west-1.rds.amazonaws.com';
$db = 'lampdb';
$user = 'lampadmin';
$pass = '2378Mike$';
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
