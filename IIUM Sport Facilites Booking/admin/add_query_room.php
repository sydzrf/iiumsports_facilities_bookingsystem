<?php
	if(ISSET($_POST['add_room'])){
		$faci_sport = $_POST['faci_sport'];
		$faci_type = $_POST['faci_type'];
	
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `faci` (faci_sport,faci_type, photo) VALUES('$faci_sport','$faci_type', '$photo_name')") or die(mysqli_error());
		header("location:room.php");
	}
?>