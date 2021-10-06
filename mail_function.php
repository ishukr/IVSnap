<?php	
 $connec = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connec, 'u297412669_ivsmart_data');
                 $ivsnap = mysqli_real_escape_string($connec,$_POST["ivauth_code"]);
  $date = date('Y-m-d H:i:s');
   
                if(isset($_POST["ivauth_code"]) && isset($_POST["submit_code"]))
                {
                    $q = "select * from snap_data where code = $ivsnap";
                    $result = mysqli_query($connec, $q);

$num = mysqli_num_rows($result);

if($num == 1){
                echo "0";
                 $query = "UPDATE snap_data SET joined_at = '$date' ,verified_state = '1' WHERE code ='$ivsnap'";
               
  $query_run = mysqli_query($connec, $query);
       if($query_run)
                {
            header('location:ivsnap?verify');
}
}
else 
{
    header('location:mail_verification?error');
    
}
}
?>
