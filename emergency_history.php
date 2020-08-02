<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="she";
	$conn = mysqli_connect($servername,$username,$password,$db);
			if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
	if (isset($_POST['submit'])) {
		$user_id = $_POST['user_id'];
		$location = $_POST['location'];
		$activity = $_POST['activity'];
		$served = $_POST['served'];
		$email_id = $_POST['email_id'];
		$time_duration = $_POST['time_duration'];
		$sql = "INSERT INTO `emergency_history`(`user_id`, `location`, `activity`, `served`, `email_id`, `time_duration`) VALUES ('$user_id','$location','$activity','$served','$email_id','$time_duration')";
		if (mysqli_query($conn,$sql)) {
				echo "New Record Inserted Sucessfully....";
			}
			else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
	}
?>