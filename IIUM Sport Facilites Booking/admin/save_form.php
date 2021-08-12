<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$faci_no = $_POST['faci_no'];
		$query = $conn->query("SELECT * FROM `booking` WHERE `faci_no` = '$faci_no' && `status` = 'Booked' ") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Fully booked')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `booking` NATURAL JOIN `guest` NATURAL JOIN `faci` WHERE `booking_id` = '$_REQUEST[booking_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			
		
			$conn->query("UPDATE `booking` SET `faci_no` = '$faci_no' , `status` = 'Booked' WHERE `booking_id` = '$_REQUEST[booking_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>