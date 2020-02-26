<?php
include '../includes/connect.php';

$sql = prepareSQLstatement();
$con->query($sql);
header("location: ../resowner.php");

function prepareSQLstatement(){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $username = $_POST['username'];
    $RestaurantName = $_POST['RestaurantName'];

    $sql_statement = "INSERT INTO items (name, price, username, RestaurantName) VALUES ('$name', '$price', '$username', '$RestaurantName')";
    return $sql_statement;
}

?>
