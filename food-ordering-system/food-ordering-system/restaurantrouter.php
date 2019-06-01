<?php
  if(isset($_GET['RestaurantName'])){
    $RestaurantName = $_GET['RestaurantName'];
    $_SESSION['RestaurantName'] = $RestaurantName;
    header("location:login.php?userstatus=fromRes&RestaurantName=$RestaurantName");
  }
 ?>
