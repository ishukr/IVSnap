
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

// Check entry within table
$query = "SELECT COUNT(*) AS cntpost FROM snaplike WHERE postid=".$postid." and userid=".$userid;

$result = mysqli_query($con,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];


if($count == 0){
    $insertquery = "INSERT INTO snaplike(userid,postid,type) values(".$userid.",".$postid.",".$type.")";
    mysqli_query($con,$insertquery);
}else {
    $updatequery = "UPDATE snaplike SET type=" . $type . " where userid=" . $userid . " and postid=" . $postid;
    mysqli_query($con,$updatequery);
}


// count numbers of like and unlike in post
$query = "SELECT COUNT(*) AS cntLike FROM snaplike WHERE type=1 and postid=".$postid;
$result = mysqli_query($con,$query);
$fetchlikes = mysqli_fetch_array($result);
$totalLikes = $fetchlikes['cntLike'];

$query = "SELECT COUNT(*) AS cntUnlike FROM snaplike WHERE type=0 and postid=".$postid;
$result = mysqli_query($con,$query);
$fetchunlikes = mysqli_fetch_array($result);
$totalUnlikes = $fetchunlikes['cntUnlike'];


$return_arr = array("likes"=>$totalLikes,"unlikes"=>$totalUnlikes);

echo json_encode($return_arr);