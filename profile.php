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
	$password = $_POST['password'];
	$user_name = $_POST['user_name'];
	$contact_num = $_POST['contact_num'];
	$address = $_POST['address'];
	$user_age = $_POST['user_age'];
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$sql = "INSERT INTO `user_profile`(`user_id`, `password`, `name`, `contact_no`, `email_id`, `address`, `age`) VALUES ('$user_id','$password','$user_name','$contact_num','$user_email','$address','$user_age')";
	if (mysqli_query($conn,$sql)) {
				echo "New Record Inserted Sucessfully....";
			}
			else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
}
?>