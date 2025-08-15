<?php
// Using PDO (recommended)
$server_name = "localhost";
$username = "carBrands";
$password = "8XTynpceJQkYo6EN";
$dbname = "carbrands";

try {
    $pdo = new PDO("mysql:host=$server_name;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>
