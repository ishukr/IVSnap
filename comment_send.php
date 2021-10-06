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
 
if (isset($_POST["post"]))
 {
       $email =$row['user_id'];
    $verif = $row['verified'];
     
      $post = $_GET['id'];
      $post_user = $_GET['ivs'];
              
        $pf_comment=$row['profile_pic'];
       
      $notseen='<i class="far fa-eye-slash"></i>';
        $date = date('Y-m-d H:i:s');
     
        $title =  mysqli_real_escape_string($conn,$_POST['comment']);
        
    
    $sql = "INSERT into table_comment(post_id,email_user,comment,user_comment,verified_reply,date,pf_link) VALUES('$post',' $post_user','$title','$email','$verif','$date','$pf_comment')";
    
  $query_change = "INSERT into user_activity(email,post_id,user,text,pf_link,verified_noti,date) VALUES('$post_user','$post','$email','Appreciated on your Post','$pf_comment','$verif','$date')";
 
    if(mysqli_query($conn,$sql)){
        
         if(mysqli_query($conn,$query_change)){
 
     

   header('location:comment.php?id='.$post);
         }
    } 
    //oiuiogyiuiuguiodchaishcughcsahcaiocasgsgcdsogyaiwscgducgya
 else if (isset($_POST["reply"]))
 {
       $email =$row['user_id'];
    
     
      $post = $_GET['id'];
      $post_user = $_GET['ivs'];
              
        $pf_comment=$row['profile_pic'];
       
      $notseen='<i class="far fa-eye-slash"></i>';
        $date = date('Y-m-d H:i:s');
     
        $title =  mysqli_real_escape_string($conn,$_POST['comment']);
        
    echo $email;
    echo $post;
    echo $post_user;
    
   /* $sql = "INSERT into table_comment(post_id,email_user,comment,user_comment,date,pf_link) VALUES('$post',' $post_user','$title','$email','$date','$pf_comment')";
    
  $query_change = "INSERT into user_activity(email,post_id,user,text,pf_link,date) VALUES('$post_user','$post','$email','Appreciated on your Post','$pf_comment','$date')";
 
    if(mysqli_query($conn,$sql)){
        
         if(mysqli_query($conn,$query_change)){
 
     

   header('location:comment.php?id='.$post);
         }
    }
    else{
  
        header('location:comment.php');
        
    }*/
}
 //kchadsydascyhasvhascshaiscsacsncakbcslhawbsaihsipacbcscscscw9knkuyhisgcicscschasjcsigaisyd,niyscg ykciy
 
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