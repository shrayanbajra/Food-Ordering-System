<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$username = $_POST['username'];
$RestaurantName = $_POST['RestaurantName'];
$sql = "INSERT INTO items (name, price, username, RestaurantName) VALUES ('$name', '$price', '$username', '$RestaurantName')";
$con->query($sql);
header("location: ../resowner.php");
?>
