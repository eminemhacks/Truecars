<?php
include 'db_connect/db-connect.php';

$cars = [
    ['name' => 'Car 1', 'image_path' => 'assets/img/cars/car1.McLaren.jpg'],
    ['name' => 'Car 2', 'image_path' => 'assets/img/cars/car2.jpg']
];

$stmt = $pdo->prepare("INSERT INTO car_images (name, image_path) VALUES (?, ?)");

foreach ($cars as $car) {
    $stmt->execute([$car['name'], $car['image_path']]);
}

// $execute = $stmt->execute($car);

echo ("Statement has inserted Cars inserted successfully!");
?>
