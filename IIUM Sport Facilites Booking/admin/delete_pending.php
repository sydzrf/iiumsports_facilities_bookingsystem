<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `booking` WHERE `booking_id` = '$_REQUEST[booking_id]'") or die(mysqli_error());
	header("location:reserve.php");
?>