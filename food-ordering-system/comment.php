<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="comment";
try{
	$conn = mysqli_connect($servername, $username,$password,$dbname);
	echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connection");
} 
//if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$comment=$_POST['comment'];
	$register_query = "INSERT INTO comm(username, email, password, comment) VALUES ('$username','$email','$password','$comment')";
try{
	$register_result = mysqli_query($conn, $register_query);
if($register_result){
	if(mysqli_affected_rows($conn)>0){
		echo("Comment delivered");
	}else{
		echo("Not delivered");
	}
}
}catch(Exception $ex){
	echo("error".$ex->getMessage());
}
//}
 
?>