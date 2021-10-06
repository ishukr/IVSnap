 <?php  
 //fetch.php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");  
      $query = "SELECT * FROM reply_comment WHERE user ='".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = '  
                <p><img src="images/'.$row["image"].'" class="img-responsive img-thumbnail" /></p>  
                <p><label>Name : '.$row['user'].'</label></p>  
                <p><label>Address : </label><br />'.$row['date'].'</p>  
                <p><label>Gender : </label>'.$row['pf_link'].'</p>  
                <p><label>Designation : </label>'.$row['post_id'].'</p>  
                <p><label>Age : </label>'.$row['age'].' Years</p>  
           ';  
      }  
      echo $output;  
 }  
 ?>  