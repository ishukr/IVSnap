<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}


include "config.php";


?>

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

$id = $_GET['id'];

$pf_id = $_GET['$ivs'];

// sql to delete a record
$sql = "DELETE FROM table_comment WHERE id= '$id'";

if ($conn->query($sql) === TRUE) {
  echo 8;
    // header('location:comment_user.php?id='.$pf_id);
  
} else {
  echo 5;
   //header('location:comment_user.php?id='.$pf_id);
}


$conn->close();
?> 