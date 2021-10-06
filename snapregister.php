<?php

session_start();


$con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
mysqli_select_db($con, 'u297412669_ivsmart_data');


$usrid =  mysqli_real_escape_string($con,$_POST['userid']);
$name =  mysqli_real_escape_string($con,$_POST['name']);
$email =  mysqli_real_escape_string($con,$_POST['email']);
//$password = mysqli_real_escape_string($con,md5($_POST['password']));

$password = mysqli_real_escape_string($con,hash("sha256",$_POST['password']));





$q = "select * from snap_data where email = '$email' && verified_state = '1'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
$s = "select * from snap_data where user_id = '$usrid' && verified_state = '1'";

$result1 = mysqli_query($con, $s);

$num1 = mysqli_num_rows($result1);
$ss = "select * from snap_data where email = '$email' && verified_state = '0'";

$result5 = mysqli_query($con, $ss);

$num5 = mysqli_num_rows($result5);
if($num1 == 1) {
     header('location:snap.php?error1');
}else{
if($num == 1) {
     header('location:snap.php?error');
}
else{
 
 if($num5 == 1) {
     $_SESSION['varname'] = $email;
    header('location:mail_verification.php?id');
}
else { 
    $reg = "insert into snap_data(user_id,name, email, password,profile_pic)  values ('$usrid' ,'$name' , '$email' , '$password','person_iv.jpg')";
    mysqli_query($con, $reg);
    //mail function in iv snap
    
 $token = md5($email).rand(10,9999);
 $otp = rand(100000,999999);
 $link = "$otp";
 $update = mysqli_query($con,"UPDATE snap_data set  token='" . $token . "' , code='" . $otp . "' WHERE email='" . $email . "'");
 
 
	     	$message_body='<html> 
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
    
    <h5 class="card-title"><em><span style="font-family: Impact, Charcoal, sans-serif; font-size: 10px;">Hey,'.$name.' Welcome to IVsnap</span></em></h5>
  
    

</div>
</div>
</div>
</div>
<div class="card mb-3">
  <img src="https://ivsnap.com/icons/snap.png" class="card-img-top" alt="Snap">
  <div class="card-body">
  <p class="card-text primary" style="text-align: center;"><strong>Please Verify your email to proceed.</strong></p>

    <h5 class="card-title" style="text-align: center;"><span style="font-size: 10px;">Your Snap authentication code is :'.$link.'</span></h5>
    <h5><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">Thanks for Using IVsnap . Do not share this code with anyone.</span></strong></span></h5>
<h5 style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">With regards,</span></strong></span></h5>
<h5 style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><strong><span style="font-size: 10px;">IVsnap<br></span></strong><strong></strong></span></h5>
    <h5 class="card-text" style="text-align: center;"><small class="text-muted"><span style="font-size: 9px;">&copy; Copyright 2020 All rights reserved. Designed by International Villagers</span></small></h5>
  </div>
</div>
    </body> 
    
    </html>';
	    $from = "connect@ivsnap.com";
	    $fromName = "Ivsnap"; 
    $to = $email;
    $subject = "Ivsnap Account Activation";
    $message = $message_body;
    $headers = "From:" . $from;
    // Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
   $result= mail($to,$subject,$message, $headers);
    //end of mail
    $_SESSION['varname'] = $email;

    header('location: mail_verification.php');
}
}
}
//header('location:index.php');

?>
