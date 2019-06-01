<?php
  $con = mysqli_connect('localhost','root','','food');
  if ($con == false) {
    echo "Error connecting to database";
  }

  $name = $_POST['search'];
  
  $qry = "SELECT * FROM `items` WHERE `name` LIKE '%$name%' ";

  $run = mysqli_query($con,$qry);

 ?>

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
 				<!-- <li><a href="../food-ordering-system/restaurantrouter.php?RestaurantName=<?php echo $RestaurantName ?>">Order</a></li> -->
          <!-- <li>Booking</li> -->
 			</ul>
 		</div>

 		<section class="lower_part">

 			<br>
 			<div class="row">
 				<div class="col-md-3">
 					<ul class = "main-nav1">
 						<li><a href="deliveryinfo.html">Delivery Info</a></li>
 					</ul>
 				</div>
 				<div class="col-md-4">
 					<form class="navbar-form navbar-right" action="searchForFood.php" method="post">
 						<div class="form-group has-feedback">
 							<input class="form-control" type="text" name="search" placeholder="Search for Food Items">
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
 				<?php
        if (mysqli_num_rows($run)<1) {
          echo "<tr><td colspan='2' align='center'> Sorry ".$name." isn't available. </td></tr>";
        }else {
    			while($data=mysqli_fetch_assoc($run)){
    				?>
    				<tr>
    					<td><?php echo $data['name']; ?></td>
    					<td><?php echo $data['price']; ?></td>
    				</tr>
    				<?php
    			}
        }
         ?>
 			</table>

 				</div>
 			</div>
 			<div class="col-md-2"></div>
 		</div>


    
 		</section>

 	</header>

 </body>
 </html>
