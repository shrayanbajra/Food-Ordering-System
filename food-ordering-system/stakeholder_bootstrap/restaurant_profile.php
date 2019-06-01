<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Profile</title>
	<meta charset="utf-8">
	<link  href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<link  href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="res_pro_style.css">
	<style>
    #map{
      width:100%;
      height:300px;
		}
  </style>
</head>
<body>

	<header>

		<div class="Background_wrapper">
			<br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br>
			<div class="logo_part">
				<img class="rest_logo" title="Dummy Restaurant" src="../images/resourceImage/dummy_rest_logo.jpg" width="120px">
			</div>

			<div class="text_part">
				<h1>Dummy Restaurant</h1>
				<p>
					<img src="../images/resourceImage/restaurant_logo1.png" width="30px">&nbsp; Kalimati
				</p>
			</div>

		</div>

		<div class="main_nav">
			<ul>
				<li><a href="">Booking</a></li>
				<li><a href="../food-ordering-system/login.php?userstatus='fromRes'">Order</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
		</div>

		<section class="lower_part">

			<br>
			<div class="row">
				<div class="col-md-3">
					<ul class = "main-nav1">
						<li><a href="">Delivery Info</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<form class="navbar-form navbar-right" action="searchForFood.php" method="post">
						<div class="form-group has-feedback">
							<input class="form-control" type="text"  name="search" placeholder="Search for Food Items">
							<span class="glyphicon glyphicon-search form-control-feedback"></span>
						</div>
					</form>
				</div>
			</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="menu_section">

			<h2>Menu</h2>
			<h3>Categories</h3>

			<table width="100%" border="1" >
				<tr style="height: 40px; line-height: 40px;">
					<th align="center"> Item </th>
					<th align="center"> Price </th>
				</tr>
				<tr>
					<td align="center">Momo</td>
					<td align="center">100 &nbsp; <?php echo '<a href="../food-ordering-system/login.php?userstatus=fromRes">'; ?> <img src="../images/icons/addButton.png" alt="AddToCart"> </a></td>

				</tr>
				<tr>
					<td align="center">Chowmein</td>
					<td align="center">100 &nbsp; <a href="../food-ordering-system/login.php?userstatus='fromRes'"> <img src="../images/icons/addButton.png" alt="AddToCart"> </a></td>
				</tr>
				<tr>
					<td align="center">Chopsuey</td>
					<td align="center">100 &nbsp; <a href="../food-ordering-system/login.php?userstatus='fromRes'"> <img src="../images/icons/addButton.png" alt="AddToCart"> </a></td>
				</tr>
				<tr>
					<td align="center">Fried Rice</td>
					<td align="center">100 &nbsp; <a href="../food-ordering-system/login.php?userstatus='fromRes'"> <img src="../images/icons/addButton.png" alt="AddToCart"> </a></td>
				</tr>
				<tr>
					<td align="center">Thukpa</td>
					<td align="center">100 &nbsp; <a href="../food-ordering-system/login.php?userstatus='fromRes'"> <img src="../images/icons/addButton.png" alt="AddToCart"> </a></td>
				</tr>
				<tr>
					<td align="center">Rice Curry</td>
					<td align="center">100 &nbsp; <a href="../food-ordering-system/login.php?userstatus='fromRes'"> <img src="../images/icons/addButton.png" alt="AddToCart"> </a></td>
				</tr>
			</table>

				</div>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="row">
				<h3>Find us on Google Maps</h3>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div id="map"></div>
        	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDShSYssqKYoYnKO-m6pK2ERngP9P7rUdU&callback=initMap"></script>
    			<script>
    				function initMap() {
      				var location = {lat:27.691500, lng: 85.342003};
      				var map = new google.maps.Map(document.getElementById("map"), {
      					zoom: 15,
      					center: location
      				}
      				);
      				var marker = new google.maps.Marker({
        				position: location,
        				map: map,
	      				title: 'Hope Therapy Center'
      				});
    				}
    			</script>
				</div>
				<div class="col-md-2"></div>
		</div>

				</section>

	</header>

</body>
</html>
