<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}
 


          

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

$trash = $_SESSION['user'];

							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivida = $row['user_id'];
                    
              
              }  
           


// sql to delete a record
$sql = "DELETE FROM user_activity WHERE email= '$trash' OR email = '$ivida'";


if ($conn->query($sql) === TRUE) {
    	
    	

  echo "Record deleted successfully";
  header("Location:comment_activity.php?success");
    
    
} else {
  

   header("Location:comment_activity.php?errimg");
}


$conn->close();
?> 
