<?php  
 if(isset($_POST["user_id"]))  
 { 
      //$uid = $_POST['uid'];
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "she");  
      $query = "SELECT * FROM user_profile WHERE user_id = '".$_POST["user_id"]."' ";  
        
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-borderequeryd">'; 
           $result = mysqli_query($connect, $query); 
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>user_id</label></td>  
                     <td width="70%">'.$row["0"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>user_name</label></td>  
                     <td width="70%">'.$row["2"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>contact_number</label></td>  
                     <td width="70%">'.$row["3"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>email_id</label></td>  
                     <td width="70%">'.$row["4"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>address</label></td>  
                     <td width="70%">'.$row["5"].' </td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>age</label></td>  
                     <td width="70%">'.$row["6"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
