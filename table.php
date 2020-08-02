<?php
$servername="localhost";
  $username="root";
  $password="";
  $db="she";
  $conn = mysqli_connect($servername,$username,$password,$db);
      if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
  //$query = "SELECT * FROM `emergency_history` where `served`=0";
  //$result = mysqli_query($conn,$query);
  $query = "SELECT * FROM `user_profile` WHERE `user_id` IN (SELECT `user_id` FROM `emergency_history` where `served`=0)";
  $result = mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>
   <style>
     .tab1{
      
     }
   </style> 
  </title>
</head>
<body>
	<div>
		<table border="1px">
      <?php 
    while($row = mysqli_fetch_array($result))  
      {
        $image ="<img src=".$row['7']." width='150' height='150' />";
    ?>  
			<tr>
				<td rowspan="4" class="tab1"><?php echo "$image"; ?></td>
			</tr>
			<tr>
				<td class="tab1" width="60%" height="10%">id:</td>
			</tr>
			<tr>
				<td class="tab1" width="60%" height="10%">name:</td>
			</tr>
			<tr>
				<td class="tab1" width="60%" height="10%"><button value="<?php echo $row["0"]; ?>" name = "map">view map</button></td>
			</tr>
    </br>
       <?php  
      }  
    ?> 
		</table>
	</div>

</body>
</html>

 