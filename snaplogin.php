<?php

session_start();


$con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
mysqli_select_db($con, 'u297412669_ivsmart_data');
if($_POST['email'] == "" || $_POST['password'] == "")
{
    header('location:ivsnap?bl');
}
else if(isset($_POST['submit']))
{
    
$email =   mysqli_real_escape_string($con,$_POST['email']);
$cookpass = $_POST['password'];
$password = mysqli_real_escape_string($con,hash("sha256",$_POST['password']));
//$password = mysqli_real_escape_string($con,md5($_POST['password']));
$login = "select * from snap_data where email = '$email'";
$loin = mysqli_query($con, $login);
$log = mysqli_num_rows($loin);
if($log !== 1){
     header('location:ivsnap?pa');
} else{

$q = "select * from snap_data where email = '$email' && password = '$password'";
$verify = "select * from snap_data where email = '$email' && verified_state = '1'";
$blocked = "select * from snap_data where email = '$email' && blocked = '0'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
$success = mysqli_query($con,$verify);
$block = mysqli_num_rows($success);
$acc = mysqli_query($con,$blocked);
$abc = mysqli_num_rows($acc);
 if($abc == 1){
 if($block == 1){
if($num == 1){
    
   
    if(isset($_POST['remember']))
    {
        setcookie('emailcookie',$email,time()+3600*24*365);
        setcookie('passwordcookie',$cookpass,time()+3600*24*365);
        $_SESSION['user'] = $email;
  header('location:live');
    }
    else{
         $_SESSION['user'] = $email;
  header('location:live');
    }
     
}
else{ 
  
     header('location:ivsnap?pass');


}
}
else{
    header('location:ivsnap?block');
}
}else{
 header('location:ivsnap?ter');   
}
}
}

//header('location:index.php');

?>
