<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$RestaurantName = $_POST['RestaurantName'];

$qry = "SELECT * FROM items WHERE RestaurantName = '$RestaurantName'";
$run = mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
$username = $data['username'];

$sql = "INSERT INTO items (name, price, RestaurantName, username) VALUES ('$name', '$price', '$RestaurantName','$username')";
$con->query($sql);
header("location: ../admin-page.php");
?>
