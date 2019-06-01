<?php $con = new mysqli('localhost','root','','food'); 
	$username = "res6";
	$RestaurantName = "Restaurant6";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Profile</title>
	<meta charset="utf-8">
	<link  href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<link  href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="res_pro_style6.css">
	<style>
    #map{
      width:100%;
      height:400px;
		}
		.delivery a{
		font-size: 16px;
		color: white;
	}
  </style>
</head>
<body>

	<header>

		<div class="Background_wrapper">
			<br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br>
			<div class="logo_part">
				<img class="rest_logo" title="Dummy Restaurant" src="../images/resourceImage/dummy_rest_logo6.jpg" width="120px">
			</div>

			<div class="text_part">
				<h1>Dummy Restaurant F</h1>
				<p>
					<img src="../images/resourceImage/restaurant_logo1.png" width="30px">&nbsp; Samakhusi
				</p>
			</div>
			<br><br>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2" style="font-size: 14px">
					<p>DELIVERY HOURS</p>
					<p>10:00 AM - 7:00 PM</p>
				</div>
				<div class="col-md-2" style="font-size: 14px" >
					<p>MINIMUM ORDER</p>
					<p>Rs.400.00</p>
				</div>
				<div class="col-md-6">
						<p class="delivery" style="font-size: 14px; float: right;"><a href="deliveryinfo.html">Delivery Info</a></p>
				</div>

		</div>
		</div>

		<div class="main_nav">
			<ul>
				<li><a href="../food-ordering-system/restaurantrouter.php?RestaurantName=<?php echo $RestaurantName ?>">Order</a></li>
				<li><a href="">Booking</a></li>
			</ul>
		</div>
		<br><br>
		
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<img src="../images/resourceImage/dummy_restaurant6.jpg" width="600px" height="400px">
		</div>
		<div class="col-md-1"></div>
			<div class="col-md-4">
				<h3 style="color: black">About Dummy Restaurant F</h3>
				<p style="color: black; font-size: 16px; text-align: justify;" >
					Burger Shack Thinking about best Burger in Town?!!!.Good!! Burger Shack is here to serve you with the best burger in town. Appraised with lots of positive comments and admired by tons of burger lovers, Burger Shack has become the ultimate destination in Kathmandu city among citizens of Kathmandu.Burger Shack serves hundreds of customer in daily basis. Adequate dining space and prompt service molds it as outstanding from the rest of the burger places in Kathmandu. In another hand, it offers you to select arrays of extra fillings and selective items that you would just love your burger to be.Burger Shack has taken Burger's authentic taste, quality and presentation to the next level.It has two outlets currently in Kathmandu and Lalitpur coping with the high demands of customers.Quality conscious staff and service team makes it one of the suitable place to seat, enjoy and eat.
				</p>
			</div>
		</div>
		<br>
		<section class="lower_part">

			<br>
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-4">
					<form class="navbar-form navbar-right" action="searchForFood.php" method="post">
						<div class="form-group has-feedback">
							<input class="form-control" type="text"  name="search" placeholder="Search for Food Items">
							<input type="hidden" name="RestaurantName" value="<?php echo $RestaurantName ?>">
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

<table width="100%" border="1" style="margin: 50 auto; height: 60%; line-height: 60%;">
				<tr style="height: 40px; line-height: 40px;">
					<th>Name</th>
					<th colspan="2">Price</th>
				</tr>

				<?php
					$qry = "SELECT * from items where username = '$username'";
					$run = mysqli_query($con,$qry);
					while($data=mysqli_fetch_assoc($run))
   				{
   				?>
    			<tr>
        		<td><?php echo $data['name']; ?></td>
       			<td><?php echo $data['price']; ?></td>
            <td width="5%" align="center"> <img src="../images/icons/addButton.png" alt="AddtoCart" width="80%"> </td>
       		</tr>	<?php
					} ?>

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
      				var location = {lat:27.735500, lng: 85.317299};
      				var map = new google.maps.Map(document.getElementById("map"), {
      					zoom: 15,
      					center: location
      				}
      				);
      				var marker = new google.maps.Marker({
        				position: location,
        				map: map,
	      				title: 'Dummy Restaurant F'
      				});
    				}
    			</script>
				</div>
				<div class="col-md-2"></div>
		</div>
		<br><br>

				</section>

	</header>

</body>
</html>
