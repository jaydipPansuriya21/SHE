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
		$relation = $_POST['relation'];
		$contact_no = $_POST['contact_no'];
		$sql= "INSERT INTO `emergency_contact`(`user_id`, `relation`, `contact_no`) VALUES ('$user_id','$relation','$contact_no')";
		if (mysqli_query($conn,$sql)) {
				echo "New Record Inserted Sucessfully....";
			}
			else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);

	}
?>