<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
	<body>
		<section class="login-box">
			<div id="frm">
				<img src="login2.png" class="login2">
				<h1>Login Here</h1>
				<form action="process.php" method="POST">
					<p>
						<label>Username:</label>
						<input type="text" id="user" name="user">
					</p>

					<p>
						<label>Password:</label>
						<input type="password" id="pass" name="pass">
					</p>

					<p>
						<input type="submit" id="btn" value="Login">
					</p>
					<a href="">Forgot password?</a>
				</form>
			</div>
		</section> 
	</body>
</html>