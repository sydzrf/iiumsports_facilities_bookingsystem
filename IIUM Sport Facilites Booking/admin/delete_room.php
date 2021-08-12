<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `faci` WHERE `faci_id` = '$_REQUEST[faci_id]'") or die(mysqli_error());
	header("location:room.php");
?>