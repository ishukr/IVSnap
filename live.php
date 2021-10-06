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
<script src="jquery-3.3.1.js" type="text/javascript"></script>
        
        
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <script src="script.js" type="text/javascript"></script>
        
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175308706-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175308706-1');
</script>
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
    <style>
        body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
    </style>
    <style>
.like,.unlike {
  background-color: black;
  border: none;
  color: white;
  padding: 7px 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 2px 2px;
  cursor: pointer;
  
 
</style>
  <style>
.live 
{
  background-color: black;
  border: none;
  color: white;
  padding: 7px 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 2px 2px;
  cursor: pointer;
  
 
</style>
 <style>
.dots {
  background-color: black;
  border: 0px;
  color: white;
 
 
 
  
  font-size: 20px;
  
 
  
 
</style>

<style>
.badge-notify{
   background:red;
   position:relative;
   top: -10px;
   right:0px;
}

a:hover {
  color: #535CE5;
}

</style>
<style>
hr.new1 {
  border-top: 1px solid white;
}

</style>

<style>
    h1 {
  color: white;
  text-shadow: 1px 1px 2px blue, 0 0 25px blue, 0 0 5px darkblue;
}
</style>
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 42px;
  border-radius: 50%;
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


  </head>
  
  <body style="background-color:    #000000;">
  <audio id="myAudio">
 
  <source src="icons/pop.mp3" type="audio/mpeg">
  
</audio>
  <div class="site-wrap">

    <div class="site-mobile-menu" >
      <div class="site-mobile-menu-header" style="background-color:#ffff;">
        <div class="site-mobile-menu-close mt-3" >
          <span class="icon-close2 js-menu-toggle" ></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    


  <nav class="navbar fixed-bottom navbar-dark bg-black py-1 ">
  <a class="navbar-brand" href="#" style="  color:#87CEEB;"><i class="fa fa-home" aria-hidden="true"></i>
</a>
   <a class="navbar-brand"  href="search.php"><i class="fa fa-search" aria-hidden="true"></i>
</a>

    

  <a class="navbar-brand" href="#" onclick="sanp_upload();"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
 <script type="text/javascript">
     function sanp_upload(){
         window.location.replace("snap_upload.php");
     }
 </script>
  <?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['user_id'];
                    $ivs = $row['name'];
                    $image=$row['profile_pic'];
              
            
              }  
            ?>
            
    
   <div id="iv_auto">
          <?php
     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM user_activity WHERE email = '$id' && status = '0' ";
 $query1 = "SELECT * FROM user_activity WHERE email = '$ivid' && status = '0' ";
               
                $query_run = mysqli_query($connection, $query);
                $query_run1 = mysqli_query($connection, $query1);
                
                
                $count = mysqli_num_rows($query_run);
                 $count1 = mysqli_num_rows($query_run1);
                 $var = $count + $count1;
                if ( $var<1 )
                {
                    $var='';
                }
                if ( $var>9 )
                {
                    $var='9+';
                }
                if ( $var>99 )
                {
                    $var='99+';
                }
                
                
                
            ?> 
            
 <a class="navbar-brand"  href="comment_activity.php"><i class="fas fa-envelope-open-text"></i><span  class="badge badge-notify" ><?php echo"$var"; ?></span></a>
 
</a>


</div>
<script type="text/javascript">
    setInterval("my_function();",1000); 
    function my_function(){
      $('#iv_auto').load(location.href + ' #iv_auto');
    }
  </script>

<a class="activity" href='snapprofile.php?id=<?php echo $ivid; ?>'><img src="pf_images/<?php echo $image; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar1"  style="width:29px">
</a>
</nav>



    <header class="site-navbar py-0 border-bottom" role="banner">
    


      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2" data-aos="fade-down">
              <div class="col-6 col-xl-2" data-aos="fade-down">
           <h1><span style="font-size: 10px;"><img src="icons/snap.png" width="200" height="50"></span></h1>
         
          </div>
</div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center py-0" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                
                
                <li><a class="navbar-brand" href="battlezone/battle_participate.php"><i class="fab fa-battle-net"></i> BattleZone</a></li>
                
                
                <script language="javascript">
document.write(unescape('%3C%6C%69%20%63%6C%61%73%73%3D%22%68%61%73%2D%63%68%69%6C%64%72%65%6E%22%3E'));
</script>
                      <a href="#">Info</a>
                      <ul class="dropdown">
                          <li><a href="privacy_policy/info"><i class="fas fa-info-circle"></i> info</a></li>
                        <li><a href="privacy_policy/about"><i class="fas fa-file"></i> About</a></li>
                        <li><a href="privacy_policy/privacy.html"><i class="fas fa-users"></i> Privacy policy&nbsp;</a></li>
                         <li><a href="privacy_policy/t&c.html"><i class="fas fa-users"></i> Terms&Condition&nbsp;</a></li>
                      </ul>
                    </li>
                
                 <li><a href="logout.php">Logout</a></li>
                
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
         
 <!--a class="navbar-brand" style="  color:#fff;" href="search.php"><i class="fa fa-search" aria-hidden="true"></i>
</a>&nbsp;
          ----->
           <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span style="color: rgb(255, 255, 255);"><span class="icon-menu h3"></span></span></a></div>
           

          </div>

        </div>
      </div>
       
              
              
          
    </header>
 <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      <div class="row" id="lightgallery">
          <?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['id'];
                    $ivs = $row['name'];
                    
              
                      ?>

					
      
			<?php
              }  
            ?>
            <?php
                 $userid = $ivid;
                $query = "SELECT * FROM snap_upload ORDER BY RAND()";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    $title = $row['name'];
                    $content = $row['title'];
                     $cov = $row['snaps'];
                     $cov1 = $row['pf_link'];
                     $ivuser = $row['iv_userid'];
                    $verify = $row['verify']; 
                    
                    $type = -1;

                    // Checking user status
                    $status_query = "SELECT count(*) as cntStatus,type FROM snaplike WHERE userid=".$userid." and postid=".$postid;
                    $status_result = mysqli_query($con,$status_query);
                    $status_row = mysqli_fetch_array($status_result);
                    $count_status = $status_row['cntStatus'];
                    if($count_status > 0){
                        $type = $status_row['type'];
                    }

                    // Count post total likes and unlikes
                    $like_query = "SELECT COUNT(*) AS cntLikes FROM snaplike WHERE type=1 and postid=".$postid;
                    $like_result = mysqli_query($con,$like_query);
                    $like_row = mysqli_fetch_array($like_result);
                    $total_likes = $like_row['cntLikes'];

                    $unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM snaplike WHERE type=0 and postid=".$postid;
                    $unlike_result = mysqli_query($con,$unlike_query);
                    $unlike_row = mysqli_fetch_array($unlike_result);
                    $total_unlikes = $unlike_row['cntUnlikes'];

          
?>
<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade">
             <div class="float-right">
  <a type="button" class="dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span style="color: rgb(255, 255, 255);"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="whatsapp://send?text= Hey i just posted a new snap check it now Visit https://www.ivsnap.com/comment?id=<?php echo  $ivuser; ?> Find me via Snap-Id:<?php echo $title; ?>">Share</a>
    <a class="dropdown-item" href='post_report.php?id=<?php echo $title; ?>&amp;$ivs=<?php echo $postid; ?>'>Report</a>
    
  </div>
</div>
            <div class="media-right">
 <p style="float: left;"><a href="view_profile.php?id=<?php echo $title; ?>"><h5 class="media-heading"><img src="pf_images/<?php echo $cov1; ?>" onerror="this.src='pf_images/person.jpg'" class="avatar"  style="width:45px"><span style="color: rgb(255, 255, 255);"style="font-family: Courier New, courier;" style="font-size: 35px;"><strong>  <?php echo $title; ?><?php echo $verify; ?><strong></span></h7></h5><p><span style="color: rgb(255, 255, 255);"><small><?php echo $content; ?></small><br></span></p></a></p>
      </div>
            
           
      <img src="snaps_images/<?php echo $cov; ?>"  onclick="false" alt="IMage" class="img-fluid"></span>
          
          <div class="row form-group">
                  <div class="col-md-12">
                     
                      
  
                      
                   <span style="color: rgb(255, 255, 255);">  <a type="button" onclick="playAudio()" value="Likeeeee" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart"></i><span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span></a></span>

                           <span style="color: rgb(255, 255, 255);"><a type="button" value="Unlike" id="Dislike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart-broken"></i><span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span></a></sapn>
                           <!----------------conmment likes--------------->
                           <?php
     
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM table_comment WHERE post_id = '$ivuser'";
               
                $query_run = mysqli_query($connection, $query);
                $count1 = mysqli_num_rows($query_run);
                
                
            ?>
                            <span style="color: rgb(85, 57, 130);"><a href="comment.php?id=<?php echo  $ivuser; ?>" class="unlike" role="button"><i class="icon-comment"></i><?php echo  $count1; ?></span>
</a>
                  </div>
                </div>
               
        </div>
        
         <?php
                }
            ?>
            
  </div>
 
  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
     
      </p>
    </div>
  </div>


    
    
  </div>
<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
</script>
  <script src="js/jquery-3.3.1.min.js"></script>
  
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  
   
  </body>
</html>
