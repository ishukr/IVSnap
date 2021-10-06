
<?php
session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}
include "config.php";
?>
<?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['id'];
                    
              
                      ?>

					
       
			<?php
              }  
            ?>
            <?php
$userid = $ivid;
$postid = $_POST['postid'];
$type = $_POST['type'];


    $insertquery = "INSERT INTO follow(user_id,follower_id,follow_id) values(".$userid.",".$postid.",".$type.")";
    mysqli_query($con,$insertquery);
