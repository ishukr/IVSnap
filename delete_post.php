
 <?php
$servername = "localhost";
$username = "u297412669_ivsmart_ishnan";
$password = "Bonsoir09@@0803$";
$dbname = "u297412669_ivsmart_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['idd'];
$res =mysqli_query($conn,"select * from snap_upload where id = $id");
while($row=mysqli_fetch_array($res))
{
    $img =$row["snaps"];
    $user=$row["iv_userid"];
}

unlink("snaps_images/".$img);

// sql to delete a record
$sql = "DELETE FROM snap_upload WHERE id= '$id'";
$likes = "DELETE FROM snaplike WHERE postid= '$id'";
$comment = "DELETE FROM table_comment WHERE post_id= '$user'";

if ($conn->query($sql) === TRUE) {
    	if ($conn->query($likes) === TRUE) {
    	    	if ($conn->query($comment) === TRUE) {
    	

  echo "Record deleted successfully";
  header("Location:snapprofile.php?success");
    
    	}
    	}
} else {
  

   header("Location:snapprofile.php?errimg");
}


$conn->close();
?> 
