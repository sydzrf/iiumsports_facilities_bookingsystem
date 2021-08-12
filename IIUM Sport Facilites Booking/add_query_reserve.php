<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$date_in = $_POST['datein'];
		$checkin_time = $_POST['timein'];
		$checkout_time = $_POST['timeout'];
		
		$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `booking` WHERE `date_in` = '$date' && `booking_id` = '$_REQUEST[booking_id]' && `status` = 'Pending' && `checkin_time` = 'timein' && `checkout_time` = 'timeout'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($date_in < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date!')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `booking` WHERE `status` = 'Pending'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['date_in']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($guest_id = $fetch['guest_id']){
							$faci_id = $_REQUEST['faci_id'];
							$conn->query("INSERT INTO `booking`(guest_id, faci_id, status, date_in, checkin_time, checkout_time) VALUES('$guest_id', '$faci_id', 'Pending', '$date_in', '$checkin_time', '$checkout_time')") or die(mysqli_error());
							header("location:reply_reserve.php");
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}	
?>