<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>IIUM SPORT FACILITIES BOOKING</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Just play. Have fun. Enjoy the game and book yours now!</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "index.php">HOME</a></li> |
		<li><a href = "aboutus.php">OUR TEAM</a></li> |		
		<li><a href = "reservation.php">BOOK NOW</a></li> |
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A BOOKING</h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `faci` WHERE `faci_id` = '$_REQUEST[faci_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<br style = "clear:both;" />

					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['faci_sport']?></h3>
						<h3 style = "color:#0033cc;"><?php echo "Types of Sport Facility: ".$fetch['faci_type']."";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname:</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename:</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname:</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address (Mahallah/Home):</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact Number:</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Date:</label>
							<input type = "date" class = "form-control" name = "datein" required = "required" />
						</div>
						<div class = "form-group">
							<label>Time In:</label>
							<input type = "time" step="3600" min="08:00" max="22:00" required class = "form-control" name = "timein" required = "required" />
						</div>
						<div class = "form-group">
							<label>Time Out:</label>
							<input type = "time" step="3600" min="08:00" max="22:00" required class = "form-control" name = "timeout" required = "required" />
						</div>
						
						
						
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Book Now</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright The Dynamite Group 6</label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>