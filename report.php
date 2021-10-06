<?php
sleep(3);

session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}


include "config.php";


$conn = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");

	$name = mysqli_real_escape_string($conn,$_POST['optradio']);
		
	$last =  mysqli_real_escape_string($conn,$_POST['id']);
	$value =  mysqli_real_escape_string($conn,$_POST['postid']);
		$pf =  mysqli_real_escape_string($conn,$_POST['userid']);
		$ema =  mysqli_real_escape_string($conn,$_POST['message']);
		if($value == "")
 {
 header('location:post_report.php?error3');
 }
 
 else
 {
 

 $sql = "INSERT into report_post(name,user_id,type,message) VALUES('$value','$pf','$name','$ema')";
 
    if(mysqli_query($conn,$sql)){
        $to = 'geekslazy@gmail.com,alexbiber567@gmail.com'; 
$from = 'connect@ivsnap.com'; 
$fromName = 'Ivsnap'; 
 
$subject = "Report Posting"; 
 
     
$htmlContent='<html> 
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
  <img src="https://ivsnap.com/icons/snap.png" class="card-img-top" alt="Snap">
  <div class="card-body">
 
    <h5 class="card-title" style="text-align: center;"><span style="font-size: 10px;">You have Snap Report</span></h5>
    <h5><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">'.$pf.'has reported on_ post of '.$value.'and post id '.$last.' and marked as'.$name.'</span></strong></span></h5>
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
        if(mail($to, $subject, $htmlContent, $headers))
 {
     header('location:post_report.php?error1');

 }
    }
    else{
  
        header('location:post_report.php?error2');
        
    }
 }

die(); 
 
?>
