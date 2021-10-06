<?php
if(isset($_POST['submit']))

$con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
mysqli_select_db($con, 'u297412669_ivsmart_data');
$email =   mysqli_real_escape_string($con,$_POST['email']);

$password = mysqli_real_escape_string($con,hash("sha256",$_POST['password']));
$q = "DELETE from snap_data where email = '$email' && password = '$password'";
if (mysqli_query($con, $q)) {
    header("Location: https://ivsnap.com/ivsnap?deleted");

}
else{
    header("Location: https://ivsnap.com/ivsnap?notdeleted");
}
?>