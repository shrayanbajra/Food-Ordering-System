<!DOCTYPE html>
<html>

<head>
	<title>Search</title>
</head>

<body>
	<table border="1" align="center" width="50%" style="margin-top: 100px;">
		<tr>
			<th>No.</th>
			<th>Restaurant Name</th>
			<th>Location</th>
		</tr>


		<?php

		if (isset($_POST['search'])) {
			$con = mysqli_connect('localhost', 'root', '', 'food');

			$restaurantsearch = $_POST['restaurantsearch'];

			$qry = "SELECT * FROM `users` WHERE `RestaurantName` LIKE '%$restaurantsearch%'";

			$run = mysqli_query($con, $qry);

			if (mysqli_num_rows($run) < 1) {
				echo "<tr><td colspan='3'> NO RECORDS FOUND!! </td> </tr> ";
			} else {
				$count = 0;
				while ($data = mysqli_fetch_assoc($run)) {
					$count++;
		?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $data['RestaurantName']; ?></td>
						<td><?php echo $data['address']; ?></td>
					</tr>
			<?php


				}
			}
			?>
	</table>
<?php
		}



?>


</body>

</html>