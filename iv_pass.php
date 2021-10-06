<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "db.php";
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($conn,"SELECT * FROM snap_data WHERE email='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 $otp = rand(100000,999999);
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($conn,"UPDATE snap_data set  token='" . $token . "' , code='" . $otp . "' WHERE email='" . $emailId . "'");
    
 
    $link = "$otp";
    $to = $emailId; 
$from = 'connect@ivsnap.com'; 
$fromName = 'IVsnap'; 
 
$subject = "Recover Snap Password";
 $htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to IVsnap</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </head> 
    <body> 
    
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
         <div class="card">
  
  
  <div class="card-body">
    
    
  
    

</div>
</div>
</div>
</div>
<div class="card mb-3">
 
  <div class="card-body">
  <p class="card-text primary" style="text-align: center;"><strong>Snap Recovery</strong></p>

    <h5 class="card-title" style="text-align: center;"><span style="font-size: 10px;">Your Snap Recovery code is :'.$link.'</span></h5>
    <h5><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">Do not share this code with anyone.</span></strong></span></h5>
<h5 style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">With regards,</span></strong></span></h5>
<h5 style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">IVsnap<br></span></strong><strong></strong></span></h5>
    <h5 class="card-text" style="text-align: center;"><small class="text-muted"><span style="font-size: 9px;">&copy; Copyright 2020 All rights reserved. Designed by International Villagers</span></small></h5>
  </div>
</div>
    </body> 
    
    </html>'; 
    // Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
   
    	
    if($result)
    {
      header('location:ivauthid_snap.php?recovery_id='.$token);
  
    }
}
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
   header('location:ivpassword_reset.php?error');
  
  }
}
?>