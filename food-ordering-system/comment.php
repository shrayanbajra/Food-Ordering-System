<?php

$connection;
try {
	$connection = connectToDatabase();
	displaySuccess("Connection Successful");
} catch (MySQLi_Sql_Exception $ex) {
	displayError("Error while connecting to database");
}

$registered_query = getRegisteredQuery();
try {
	$register_result = mysqli_query($connection, $registered_query);
	if ($register_result) {
		if (mysqli_affected_rows($connection) > 0) {
			displaySuccess("Comment delivered");
		} else {
			displayError("Not delivered");
		}
	}
} catch (Exception $ex) {
	displayError("error" . $ex->getMessage());
}

function connectToDatabase()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "comment";
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	return $connection;
}

function displaySuccess(string $success_message)
{
	echo ($success_message);
}

function displayError(string $error_message)
{
	echo ($error_message);
}

function getRegisteredQuery()
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$comment = $_POST['comment'];
	$register_query = "INSERT INTO comm(username, email, password, comment) VALUES ('$username','$email','$password','$comment')";
	return $register_query;
}
?>