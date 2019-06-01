<?php 
	//Get values passed from form in login.php file
	$name = $_POST['name'];
	$rname = $_POST['resName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
 
	//to prevent mysql injection
	$name = stripcslashes($name);
	$rname = stripcslashes($rname);
	$email = stripcslashes($email);
	$mobile = stripcslashes($mobile);
/*	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);  */

	// connect to the server and select database
	mysql_connect("localhost","root","");
	mysql_select_db("stakeholder_registration");

	// Query the database for user
	$result = mysql_query("select * from stake_reg where name = '$name' and resName = '$rname'and email = '$email'and mobile='$mobile' ")
		or die("Failed to query database".mysql_error());
	$rows = mysql_fetch_array($result);
	if($rows!=0)
		echo ("sucessfully regitered");
	else
	{
		echo("Failed to register");
		exit();
	}
 ?>