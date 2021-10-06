<?php
    $servername='localhost';
    $username='u297412669_ivsmart_ishnan';
    $password='Bonsoir09@@0803$';
    $dbname = "u297412669_ivsmart_data";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>