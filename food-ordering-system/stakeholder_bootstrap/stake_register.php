<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="food";
try{
	$conn = mysqli_connect($servername, $username,$password,$dbname);
	//echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connection");
} 
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$rname=$_POST['resName'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$address =$_POST['address'];
	$role = "RestaurantOwner";
	$imagename= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];

	move_uploaded_file($tempname, "PANdartaimg/$imagename");
	$register_query = "INSERT INTO `users`(`role`, `name`, `username`, `RestaurantName`, `password`, `email`, `address`, `contact`, `verified`, `deleted`, `image`) VALUES ('$role','$name','$username','$rname','$password','$email','$address','$mobile','0','0','$imagename')";
try{
	$register_result = mysqli_query($conn, $register_query);
if($register_result){
	if(mysqli_affected_rows($conn)>0){	
		header('location:../food-ordering-system/login.php');
	}else{
		echo("error in registration");
	}
}
}catch(Exception $ex){
	echo("error".$ex->getMessage());
}
}
 
?>
