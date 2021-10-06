<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}


include "config.php";



     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM user_activity WHERE email = '$id' && status = '0' ";
               
                $query_run = mysqli_query($connection, $query);
                $count = mysqli_num_rows($query_run);
                if ( $count>9 )
                {
                    $count='9+';
                }
                if ( $count>99 )
                {
                    $count='99+';
                }
                else{
                    $count;
                }
                
                
                
         
              
                     

					
      
		
              
            ?>