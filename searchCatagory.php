<?php  
include('includes/dbh.php');  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM jobType WHERE type LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($conn, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["type"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Catagory Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  