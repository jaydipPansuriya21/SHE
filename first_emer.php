<?php
	include("header.php");
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
	<title>Emergency</title>
	<style>
		#tab{
  color: darkblue;
  background-color: lightgrey;
  text-decoration: none;
  padding: 1%;       
  display: inline-block;
  border-top-left-radius: 40px;
  border-bottom-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-right-radius: 40px;
  align: center;
 }

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
</br></br>
	<div class="container" style="width:700px;">  
                  
                </br>  </br>
                <form method="post" action = "location.php">
                <div class="table-responsive">  
                     <table class="table table-bordered" id="tab">  
                          <tr>  
                               <th width="40%">User_details</th>  
                                 
                          </tr>
                          <?php 
    while($row = mysqli_fetch_array($result))  
      {
        $image ="<img src=".$row['7']." width='150' height='150' />";
    ?>  
      <tr>
        <td rowspan="4"><?php echo "<img src=".$row['7']." width='150' height='150' />"; ?></td>
      </tr>
      <tr>
        <td>id:<?php echo $row[0]; ?></td>
      </tr>
      <tr>
        <td>name:<?php echo $row[1]; ?></td>
      </tr>
      <tr>
        <td><button value="<?php echo $row["0"]; ?>" name = "map">view map</button></td>
      </tr>
    </br>
       <?php  
      }  
    ?> 
                     </table>  
                </div>  
       
           </form>
             </div>
</body>
</html>
<!-- <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">User Details</h4>  
                </div>  
                <div class="modal-body" id="user_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   -->
 <!-- <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{user_id:user_id},  
                success:function(data){  
                     $('#user_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script> -->
