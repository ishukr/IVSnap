<?php
session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IV &mdash;Snap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

       <link rel="stylesheet" href="css/iv_bootstrap.css">
    <link rel="stylesheet" href="css/ iv_magni.css">
    <link rel="stylesheet" href="css/iv_jquery_ui.css">
    <link rel="stylesheet" href="css/iv_carousel.css">
    <link rel="stylesheet" href="css/iv_theme.css">
    <link rel="stylesheet" href="css/minified_iv.css">    
    <link rel="stylesheet" href="css/ivsnap_pic.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/ivswip.css">
    <link rel="stylesheet" href="css/ivos.css">
    <link rel="stylesheet" href="css/style.css">
   <style>.active {
       padding: 10px 16px;
  background-color:#77739a;
  color: white;
}</style> 
<style>
.like,.unlike {
  background-color:  black;
  border: none;
  color: white;
  padding: 15px 42px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  
}
.a{
  color: #535CE5;
}
</style>
 <style>
 body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.delete {
  background-color: red;
  border: 1px;
  color: white;
   padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  
}
</style>
<style>
.badge-notify{
   background:red;
   position:relative;
   top: -10px;
   right:0px;
}
.delete_pf {
  background-color: red;
  border: 1px;
  color: white;
   padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  
}
</style>
<style>
.delete_iv {
  background-color: rgb(209, 213, 216);
  border: 1px;
  color: white;
   padding: 15px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  
}
</style>
<style>
.press_iv {
  background-color: rgb(209, 213, 216);
  border: 1px;
  color: white;
   padding: 25px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 15px 2px;
  cursor: pointer;
  
}
</style>
<style>
hr.new1 {
  border-top: 5px solid black;
}

</style>
<style>
.avatar1 {
  vertical-align: middle;
  width: 10px;
  height: 28px;
  border-radius: 50%;
}
</style>
<style>
 {
  border: 6px solid  black;
}
</style>
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
a.disabled {
  pointer-events: none;
  cursor: default;
}
</style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="navbar fixed-top navbar-dark bg-black py-1">
  <a class="navbar-brand" href="#">Snap's Notification</a>
  <?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivida = $row['user_id'];
                    $ivs = $row['name'];
                    $image=$row['profile_pic'];
              
              }  
            ?>
  <?php

							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM user_activity WHERE email = '$id' OR email = '$ivida' ORDER BY id DESC";
                $result = mysqli_query($con,$query);
                $count = mysqli_num_rows($result);
                if ( $count<1 )
                {?>
                      <a class="float-left"  style="color:#fff; font-size:24px;" class="disabled"><i class="fas fa-trash"></i></a>
          <?php      }else{
          ?>
           <a class="float-left" href="trash_notify.php" style="color:#fff; font-size:24px;"><i class="fas fa-trash"></i></a>
         <?php }
         ?>
</nav>

<br>
    <br>
    <nav class="navbar fixed-bottom navbar-dark bg-black py-1 ">
  <a class="navbar-brand" href="live.php"><i class="fa fa-home" aria-hidden="true"></i>
</a>
   <a class="navbar-brand" href="search.php"><i class="fa fa-search" aria-hidden="true"></i>
</a>

    
   
     <a class="navbar-brand" href="snap_upload.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>
             
 <a class="navbar-brand" href="comment_activity.php" style="color:#87CEEB;"><i class="fas fa-envelope-open-text"></i>
</a>


            
<a class="activity" href='snapprofile.php?id=<?php echo $ivid; ?>'><img src="pf_images/<?php echo $image; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar1"  style="width:29px">
</a>
</nav>
    
  <div id="iv_auto">
  <!----------------------------------------------------------------------------------------------------------------->
  <?php

							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM user_activity WHERE email = '$id' OR email = '$ivida' ORDER BY id DESC";
                $result = mysqli_query($con,$query);
                $count = mysqli_num_rows($result);
                if ( $count<1 )
                {?>
                      <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="icons/notify.jpeg" class="card-img-top" alt="...">
        
      </div>
    </div>
          <?php      }else{
                
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['post_id'];
                     $ivi = $row['user'];
                      $ivii = $row['text'];
                       $cov1 = $row['pf_link'];
                       $vri = $row['verified_noti'];
                       $timestamp = $row['date'];
                         $notseen = $row['fam_id'];
                         $fam = $row['snaper_id'];
                         $fam_text = $row['fam_text'];
							 
                      ?>

				  
               	
     
           
        </div>
      </div>
    </div>
    
          <div class="card">
  <div class="card-header">
      <a class="pull-left" href='view_profile.php?id=<?php echo $ivi; ?><?php echo $fam; ?><?php echo $notseen; ?>'>
                          <img class="avatar" src="pf_images/<?php echo $cov1; ?>" onerror="https://ivsnap.com/pf_images/person.jpg'" alt="profile">
                          
                        </a>
    <strong><?php echo $ivi; ?><?php echo $notseen; ?><?php echo $fam; ?> <?php echo $vri; ?><a href="comment.php?id=<?php echo  $ivid; ?>"  role="button" style="  color:#87CEEB; font-size: 15px;"><?php echo $ivii; ?></a><?php echo $fam_text; ?></strong>
     <div class="float-right"><footer class="blockquote-footer"><?php echo time_elapsed_string($timestamp);?> <cite title="Source Title">ivsnap</cite></footer></div>
     
     <p><span style="font-family: Impact, Charcoal, sans-serif;"><?php echo $content; ?></span></p>
 
</button>

 <?php
				}		
				}
               
            ?>
  </div style="padding-bottom: 15px;">
 
	

 <!--------------------------------------------------------------------------------------->      
    <?php


include 'database.php';
$id = $_SESSION["user"];

	$sql = "UPDATE `user_activity` 
	SET `status`='1' WHERE email = '$id'";
	if (mysqli_query($conn, $sql)) {
	
			
	} 
	else {
		
	
	}
	mysqli_close($conn);
?>
  <?php


include 'database.php';
$id = $_SESSION["user"];

	$sql = "UPDATE `user_activity` 
	SET `status`='1' WHERE email = '$ivida'";
	if (mysqli_query($conn, $sql)) {
	
			
	} 
	else {
		
	
	}
	mysqli_close($conn);
?>          
    

 <?php 
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
    
?>
    </div>
    <script type="text/javascript">
    setInterval("my_function();",1000); 
    function my_function(){
      $('#iv_auto').load(location.href + ' #iv_auto');
    }
  </script>
    
  </div>  
  
               
   
   
 
  </div>

      
            
          
  <!-------------------------------------------------------------------------------------------------------------------------------------->
      
		
              

            
    <br>
    <br>
          </div>
    
      </div>
    </div>
  </div>

  

    

    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  
    
  </body>
</html>
