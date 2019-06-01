<?php
 include '../includes/connect.php';
$success=0;

$username = $_POST['username'];
$password = md5($_POST['password']);

$result1 = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Administrator' AND not deleted;");
$result2 = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Customer' AND not deleted;");
$result3 = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='RestaurantOwner' AND not deleted;");
//Administrator
while($row1 = mysqli_fetch_array($result1))
{
	$success = 1;
	$user_id1 = $row1['id'];
	$name1 = $row1['name'];
	$role1= $row1['role'];
}
//Customer
while($row2 = mysqli_fetch_array($result2))
{
	$success = 2;
	$user_id2 = $row2['id'];
	$name2 = $row2['name'];
	$role2= $row2['role'];
}
//RestaurantOwner
while($row3 = mysqli_fetch_array($result3))
{
	$success = 3;
	$user_id3 = $row3['id'];
	$name3 = $row3['name'];
	$role3= $row3['role'];
  $RestaurantName = $row3['RestaurantName'];
  $username = $row3['username'];
}
switch ($success) {
	case '1':
		session_start();
		$_SESSION['admin_sid']=session_id();
		$_SESSION['user_id'] = $user_id1;
		$_SESSION['role'] = $role1;
		$_SESSION['name'] = $name1;

	header("location: ../admin-page.php");
		break;
	case '2':
		session_start();
		$_SESSION['customer_sid']=session_id();
		$_SESSION['user_id'] = $user_id2;
		$_SESSION['role'] = $role2;
		$_SESSION['name'] = $name2;
		if(isset($_POST['gotoorder']))
			header("location: ./../index.php");
		else
			header("location: ../../indexofuser.php");
		break;
	case '3':
		session_start();
		$_SESSION['resowner_sid']=session_id();
		$_SESSION['user_id'] = $user_id3;
		$_SESSION['role'] = $role3;
		$_SESSION['name'] = $name3;
    $_SESSION['username'] = $username;
    $_SESSION['RestaurantName'] = $RestaurantName;

	header("location: ../resowner.php");
		break;
	default:
		?>
			<script>
				alert('Username or Password not matching!!');
				window.open('../login.php','_self');
			</script>
		<?php
		break;
}

?>
