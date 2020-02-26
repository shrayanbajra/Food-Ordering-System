<?php 
	// Get values passed from form in login.php file
	$name = $_POST['name'];
	$rname = $_POST['resName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
 
	// To prevent MySQL injection
	$name = stripcslashes($name);
	$rname = stripcslashes($rname);
	$email = stripcslashes($email);
	$mobile = stripcslashes($mobile);

	// connect to the server and select database
	mysql_connect("localhost","root","");
	mysql_select_db("stakeholder_registration");

	// Query the database for user
	$result = mysql_query("select * from stake_reg where name = '$name' and resName = '$rname'and email = '$email'and mobile='$mobile' ")
		or die("Failed to query database".mysql_error());
	$rows = mysql_fetch_array($result);

	if($rows == 0){
		displayError("Failed to register");
		exit();
	}else{
		displaySuccess("Sucessfully Registered");
	}

	function displaySuccess(string $success_message){
		echo($success_message);
	}

	function displayError(string $error_message){
		echo($error_message);
	}
?>