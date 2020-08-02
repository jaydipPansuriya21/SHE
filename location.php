   <?php
    if ($_POST['map']) {
      // include("header.php");
      $servername="localhost";
      $username="root";
      $password="";
      $db="she";
      $conn = mysqli_connect($servername,$username,$password,$db);
          if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
          $id = $_POST['map'];
      $query = "SELECT `latitude`, `longitude` FROM `emergency_history` WHERE `user_id`='$id'";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result);
      $lat = $row[0];
      $lng = $row[1];
      $query1 = "SELECT * FROM `user_profile` WHERE `user_id`='$id'";
      $result1 = mysqli_query($conn,$query1);
      $query2 = "SELECT * FROM `emergency_contact` WHERE `user_id`='$id'";
      $result2 = mysqli_query($conn,$query2);
    }
    //$lat= 22.2587;
    //$lng= 71.1924;
    ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name='viewport' content='initial-scale=1.0'>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".but").click(function(){
    $(".detail").toggle();  
  });
   
});
</script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      .container{
        position:relative;
      }
      #map {
        width: 100%;
        height: 100%;
      }
      .but {
      position: absolute;
      bottom:2%;
      left:12%;
      padding-left: 20px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .detail{
        position: absolute;
        bottom: 5%;
        height: 500px;
        width: 350px;
        background-color: rgba(0,0,0,0.8);
        opacity: 0.2%;
        margin-left: 20px;
        border-radius: 50px;
      }
      #tab{
        color:white; 
        border: 1px white;  
      }
      .header{
        width: 1400px;
        position: absolute;
        top: 5vh;
      }
      #row3,#row4,#row5{

        width: 150px;
        text-align: center;
        padding-right: 5% 
      }
      td{
        text-align: left ;
        padding-left: 0px;
      }
      .head{
        font-size: 22px;
        text-align: center;
        padding: 12px;
        color: white;
      }
      .left 
      {
        display: inline-block;
        vertical-align: middle;
        width: 45%;
      }
      .right
      {
        display: inline-block;
        vertical-align: middle;
        width: 55%;
        margin-left: -4px;

        text-align: left;
        color: white;
      }
      .right p
      {
        margin-bottom: 12px;
      }
      #image{
        text-align: center;
        padding-left: 150px;
      }
      #txt1{
        
        padding-left: 150px;
        color: red;
      }
      #txt2{
        color: white;
        text-align: center;
      }
      #but1{
        width: 150px;
        height: 30px;
        background-color: white;
        color: black;
        border-radius: 20px;
        text-align: center;
        padding-top: 5px;
        margin-left: 130px;
      }
    </style>
  </head>
  <body class="container">
    <div id="map">
      </div>
    <div>
      <div class="header">
        <?php 
        include("header.php");
        ?>
      </div>
  
        <div>
          <button value="<?php echo "$id"; ?>" name="details" class="but">Hide</button>
        </div>
    </div>
    <div class="detail">
      <!-- <table class="table table-bordered" id="tab" cellspacing="1px" width="100%">  
      <tr id="row1">  
          <th width="70%">User_details</br></th>                       
            </tr> 
              <?php  
                  //while($row1 = mysqli_fetch_array($result1))  
                  {   
                    $image ="<img src=".$row1[7]." width='160' height='150' />";
                    ?>  
                      <tr id="row2" width="30%">
                        <td rowspan="4" width="30%"><?php echo "$image"; ?></td>
                      </tr>
                      <tr  id="row3" width="70%">
                        <td>Name:<?php echo $row1[1]; ?></td>
                      </tr>
                      <tr  id="row4" width="70%"  >
                        <td>Age: <?php echo $row1[6]; ?></td>
                      </tr>
                      <tr  id="row5" >
                        <td>Contact No: <?php echo $row1[3]; ?></td>
                      </tr>
                          <?php  
                          }  
                          ?>  
         </table>   -->
         <div class="head">User Details</div>
         <?php  
                  while($row1 = mysqli_fetch_array($result1))  
                  {   
                    $image ="<img src=".$row1[7]." width='150' height='150' />";
                    ?>
         <div class="left"> 
                   <?php echo "$image"; ?>
                    <!-- <img src="pics/download" height="150px" width="160px">   -->                     
         </div>
         <div class="right">
            
            <p>Name: <?php echo $row1[1]; ?></p>
            <p>Age: <?php echo $row1[6]; ?></p>
            <p>Contact No: <?php echo $row1[3]; ?></p>
         </div>
         <?php  
            }  
        ?> 
      </br></br>
        <img src="pics/run.jpg" height="100px" width="100px" id="image">
        <div id="txt1">Running...</div>
        <p id="txt2">Her Emergency Contact</p>
        <div id="but1">Mr.XYZ (Father)</div></br>
        <div id="but1">Mr.ABC (Brother)</div>
         
    </div>
    </body>
</html>
    <script>
      var map;
      function initMap() {
        var lat = <?php echo $lat ?>;
        var lng = <?php echo $lng ?>;
        var delhi = {lat, lng};
        map = new google.maps.Map(document.getElementById('map'), {
          
          zoom: 10,
          center: delhi
        });

        var marker = new google.maps.Marker({
          position: delhi,
          map:map
        }); 
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKtzd-npgkxS2q_EdWYtTqFxcLyCuZTs0&callback=initMap"
    async defer></script>
  
