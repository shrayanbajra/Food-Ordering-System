<!doctype html>

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="registrationform";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
} 
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$register_query = "INSERT INTO 'form'('fname', 'mname', 'lname', 'address', 'gender', 'phone', 'email', 'username', 'password') VALUES ('$fname','$mname','$lname','$address','$gender','$phone','$email','$user','$pass')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
	if(mysqli_affected_rows($conn)>0){
	echo("registration successful");
}else{
	echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 
<body>
<form action= "" method="post">
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="fname" placeholder="enter your first name"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="mname" placeholder="enter your middle name"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="lname" placeholder="enter your last name"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" placeholder="enter your address"></td>
</tr>
<tr>
<td>Gender</td>
 
 
<td><input type="radio" name="gender" value="Male">Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="gender" value="others">others</td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="tel" name="phone" placeholder="enter your phone no"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>email:</td>
<td><input type="email" name="email" placeholder="example@example.com"></td>
 
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>username:</td>
<td><input type="text" name="username" placeholder="enter your username"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td>password:</td>
<td><input type="password" name="password" value="admin"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="submit" value="SignUp"></td>
</tr>
</table>
</form>
</body>
</html>