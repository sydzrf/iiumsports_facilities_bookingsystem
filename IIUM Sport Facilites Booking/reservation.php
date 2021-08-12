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
				<strong><h3>AVAILABILITY</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `faci` ORDER BY `faci_sport` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['faci_sport']?></h3>
							<h4 style = "color:#0033cc;"><?php echo "Types of Sport Facility: ".$fetch['faci_type'].""?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?faci_id=<?php echo $fetch['faci_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Book</a>
						</div>
					</div>
				<?php
					}
				?>
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