<?php

$host = "localhost"; /* Host name */
$user = "u297412669_ivsmart_ishnan"; /* User */
$password = "Bonsoir09@@0803$"; /* Password */
$dbname = "u297412669_ivsmart_data"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);	

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
} 