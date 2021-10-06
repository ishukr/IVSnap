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
					
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');

                $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $query_run = mysqli_query($connection, $query);
            ?>
             <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "u297412669_ivsmart_ishnan"; #username of phpmyadmin
$dbpassword = "Bonsoir09@@0803$";  #password of phpmyadmin
$dbname = "u297412669_ivsmart_data";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);


 if (isset($_POST["reply"]))
 {
       $email =$row['user_id'];
    
     
      $post = $_GET['id'];
      $post_user = $_GET['ivs'];
      $user = $_GET['iv'];
              
        $pf_comment=$row['profile_pic'];
       $veri = $row['verified'];
      $notseen='<i class="far fa-eye-slash"></i>';
        $date = date('Y-m-d H:i:s');
     
        $title =  mysqli_real_escape_string($conn,$_POST['repl']);
        
    
    $sql = "INSERT into reply_comment(post_id,comment,user_comment,date,pf_link,verifie,fam_id) VALUES('$post','$title','$email','$date','$pf_comment','$veri','$post_user')";
    
  $query_change = "INSERT into user_activity(email,post_id,user,text,pf_link,verified_noti,date) VALUES('$user','$post','$email','Replied on your Comment','$pf_comment','$veri','$date')";
 
    if(mysqli_query($conn,$sql)){
        
         if(mysqli_query($conn,$query_change)){
 
     

   header('location:comment.php?id='.$post);
         }
    } 
   
    else{
  
        header('location:comment.php');
        
    }
}
 
?>
<?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?> 
<!---------------------------------------------------------------------------------------------------->