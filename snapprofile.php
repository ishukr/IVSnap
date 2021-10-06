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
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    .progress-bar-blue {
      background-color: blue !important;
}
        body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
#triangle-topleft {
  width: 0;
  height: 0;
  border-top: 100px solid #808080;
  border-left: 100px solid transparent;
  position: absolute;
}

#container {
  position: relative;
}

#container #triangle-topleft,
#overlay {
  position: absolute;
  color: white;
  right: 0;
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
 
 
 
  
  font-size: 25px;
  
 
  
 
</style>

<style>
.badge-notify{
   background:red;
   position:relative;
   top: -10px;
   right:0px;
}
.img-fluid {
  border: 4px solid  #ffffff;
}
a:hover {
  color: #535CE5;
}

</style>
<style>
hr.new1 {
  border-top: 1px solid white;
}
.modal-backdrop {
  z-index: -1;
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
  height: 45px;
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
.card-img-top {
  border-radius: 0%;
  
}
#logo { height: 300px; width: auto; overflow: hidden; }
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container {
  position: relative;
  text-align: center;
  color: white;
}
</style>

  </head>
  <body style="background-color:    #000000;">
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Your Profile Details</a>
  
      
  
</nav>

<nav class="navbar fixed-bottom navbar-dark bg-black py-1 ">
  <a class="navbar-brand" href="live.php"><i class="fa fa-home" aria-hidden="true"></i>
</a>
   <a class="navbar-brand" href="search.php"><i class="fa fa-search" aria-hidden="true"></i>
</a>

    
   
     <a class="navbar-brand" href="snap_upload.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>
     
         <?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ishu = $row['user_id'];
                    $ivs = $row['name'];
                    $image=$row['profile_pic'];
               $iv_pf = $row['id'];
             
              }  
            ?>
            <div id="iv_auto">

     
           <?php
     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM user_activity WHERE email = '$id' && status = '0' ";
 $query1 = "SELECT * FROM user_activity WHERE email = '$ishu' && status = '0' ";
               
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
</a>

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
              
                      ?>

					
      
			<?php
              }  
            ?>
            
<a class="activity" href='snapprofile.php?id=<?php echo $ivid; ?>'><img src="pf_images/<?php echo $image; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar1"  style="width:29px">
</a>
</nav>

    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
           </div>
            </div>
          <div class="col-6 col-xl-2" data-aos="fade-down">
           
          </div>
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
  <!----------------------------------------------------------------------------------------------------------------->
  <?php

							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['id'];
                    $name = $row['user_id'];
                    $profile = $row['profile_pic'];
              $name_id = $row['name'];
              $email_id = $row['email'];
               $user_bio = $row['user_bio'];
               $verified_tick  = $row['verified'];
                      ?>

					
      
			<?php
              }  
            ?>
           
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
          
          <div id="container">
  <div id="triangle-topleft"></div>
  <a href="crop"><div id="overlay"><span style="font-size: 44px;"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;</div></a>
        <div id="logo"><img src="pf_images/<?php echo $profile ?>" class="card-img-top"  onerror="this.src='https://ivsnap.com/pf_images/person.jpg'"  alt="Image"  ></div>
         
        </div>
        
        <div class="card-body text-center">
          
          <div class="card-title mb-0">Snapper Name:<?php echo $name_id  ?></div>
          <h4 class="card-title mb-0">Snap-Id:<?php echo $name ?><span style="color: rgb(71, 85, 119);"><strong><?php echo $verified_tick ?></span></strong></h4>
          
        <h5 class="card-title mb-0"><a href="fam_post.php" style="color:#000000;" data-toggle="modal" data-target="#myBio"><i class='far fa-edit' style='font-size:25px'></i></a>Bio:<span style="color:#;"><?php echo $user_bio ?></span></h5>
           </div>
    </div>
    </div>
       <div class="modal fade" id="myBio">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        
        
        <!-- Modal body -->
        <div class="modal-body">
         <form method="post" action="edit_bio.php" enctype="multipart/form-data">
                 
                    <textarea rows="1" cols="31" name="comment" maxlength="120" placeholder=" <?php echo $user_bio ?>">
</textarea>
<button type="submit" name="submit"  class="btn btn-info py-2 px-4 text-white">Update Bio</button>
</form>
        </div>
        
     
        
      </div>
    </div>
  </div>
    
 
        
           <?php
     
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM iv_fam  WHERE fam_id = '$name'";
               
                $query_run = mysqli_query($connection, $query);
                $count1 = mysqli_num_rows($query_run);
                
           
           
 $query1 = "SELECT * FROM heart_fam  WHERE snapper_id = '$name' && fam = '$ivid'";
               
                $query_run1 = mysqli_query($connection, $query1);
                $likes = mysqli_num_rows($query_run1);
                
            ?>
        
            
      <div class="card border-0 shadow">
       <div class="col-xl-2 col-md-2 mb-2">
        <div class="d-flex justify-content-center">
             
          <div class="order-1 p-2"><h3 class="card-text text-blue"><span style="color:#87CEEB; font-size: 30px;"><a href="fam_post.php" style="color:#87CEEB;"><i class="fas fa-user-friends fa-1x text-center"></i>&nbsp;<?php  echo number_format_short($count1);?><span style="font-size: 20px;"> Fam</span></a></h3></div>
          <div class="order-2 p-2"><h3 class="card-text"><a  style="color:#c61f1f; font-size: 30px;"><i class="far fa-star"></i>&nbsp;<?php  echo number_format_short($likes);?><span style="font-size: 20px;">Stars</span></a></h3></div>
          
          
        </div>
      </div>
    </div>
            
           
            
     
  <!-------------------------------------------------------------------------------------------------------------------------------------->
                  
               
              
<?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>  
           
    <br><br>
            <?php

							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['id'];
                    $ivs = $row['name'];
       
              }  
            ?>
                <?php
                 $userid = $ivid;
                 $query = "SELECT * FROM snap_upload WHERE email = '$id' ORDER BY id DESC";
                $result = mysqli_query($con,$query);
                $count = mysqli_num_rows($result);
                if ( $count<1 )
                {?>
                 <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="icons/nouploads.jpeg" class="card-img-top" alt="...">
        
      </div>
    </div>
                <?php
                } else{
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    $title = $row['name'];
                    $content = $row['title'];
                     $cov = $row['snaps'];
                    $iv_user = $row['iv_userid'];
                    
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
              &nbsp;
                <div class="float-left">
                    <span style="color: rgb(255, 255, 255);">-<?php echo $content ?></span>
                    </div>
            <div class="float-right">
  <a type="button" class="dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span style="color: rgb(255, 255, 255);"><i class="fas fa-ellipsis-h"></i></span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="whatsapp://send?text= Hey i just posted a new snap check it now Visit https://www.ivsnap.com/comment?id=<?php echo  $iv_user; ?> Find me via Snapper-Id:<?php echo $title; ?>">Share</a>
    <a class="dropdown-item" href='delete_post.php?idd=<?php echo $postid ?>' name="submit" >Delete</a>

         <!-------------------------->
          
<!-------------------------->
    
  </div>
</div>

  
         
      <img src="snaps_images/<?php echo $cov; ?>"  onclick="false" alt="IMage" class="img-fluid"></span>
          
       
                     
                      
  
                      
                   <span style="color: rgb(255, 255, 255);">  <a type="button" value="Likeeeee" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart"></i><span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span></a></span>

                           <span style="color: rgb(255, 255, 255);"><a type="button" value="Unlike" id="Dislike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart-broken"></i><span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span></a></sapn>
                           <!----------------conmment likes--------------->
                           <?php
     
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM table_comment WHERE post_id = '$iv_user'";
               
                $query_run = mysqli_query($connection, $query);
                $count1 = mysqli_num_rows($query_run);
                
            ?>
                            <span style="color: rgb(85, 57, 130);"><a href="comment.php?id=<?php echo  $iv_user; ?>" class="unlike" role="button"><i class="icon-comment"></i><?php echo  $count1; ?></span>
</a>
                
                </div>
             
               <?php
                }
                }
            ?>
       
    </div>
    <br>
    <br>
    
  
<?php
function number_format_short($n) {
        // first strip any formatting;
        $n = (0+str_replace(",", "", $n));
        // is this a number?
        if (!is_numeric($n)) return false;
         // now filter it;
        if ($n > 1000000000000) return round(($n/1000000000000), 2).'T';
        elseif ($n > 1000000000) return round(($n/1000000000), 2).'B';
        elseif ($n > 1000000) return round(($n/1000000), 2).'M';
        elseif ($n > 1000) return round(($n/1000), 2).'K';
        return number_format($n);
    }
 
 
?>
 </div>
 <!-------------->
    <script>
$(document).ready(function(){
    // File upload via Ajax
    $("#uploadForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete+'%').addClass("progress-bar-blue");
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: 'update_profile.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".progress-bar").width('0%');
               
            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#000000;">PIC upload failed, please try again.</p>');
            },
            success: function(resp){
                if(resp == 'ok'){
                    $('#uploadForm')[0].reset();
                     location.reload();
                    $('#uploadStatus').html('<p style="color:#000000;"> Profile Updated Successfully!</p>');
                }else if(resp == 'err'){
                    $('#uploadStatus').html('<p style="color:#000000;">Please select a valid snap to upload.</p>');
                }
            }
        });
    });
	
    // File type validation
    $("#file").change(function(){
        var allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        var file = this.files[0];
        var fileType = file.type;
        if(!allowedTypes.includes(fileType)){
            $("#response").fadeIn();
        $("#uploadStatus").html("Snap can't be uploaded.");
            $("#file").val('');
            return false;
        }
    });
});
</script>
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#file").change(function() {
  readURL(this);
});
</script>
 <!----------------------------->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>

  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  
    
  </body>
</html>
