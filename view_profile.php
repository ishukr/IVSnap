<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap"); // redirects them to homepage
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
         <script src="scripty.js" type="text/javascript"></script>
        
        
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
 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
    <script>
        $(window).on('load', function() { 
  $('#status').fadeOut(); 
  $('#preloader').delay(100).fadeOut('slow');
  $('body').delay(100).css({'overflow':'visible'});
})
    </script>
    <style>
        body {
  overflow: hidden;
}


/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #000000;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 290px;
  height: 400px;
  position: absolute;
  left: 40%;
  /* centers the loading animation horizontally one the screen */
  top: 30%;
  /* centers the loading animation vertically one the screen */
  background-image: url(https://ivsnap.com/icons/ivsnap.gif);
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
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
</style>
<style>
.img-fluid {
  border: 4px solid  #ffffff;
}
a:hover {
  color: #535CE5;
}
a {
  color: #0000cc;
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
#logo { height: 300px; width: auto; overflow: hidden; }
</style>


  </head>
  
  <body style="background-color:    #000000;">

<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
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
  <a class="navbar-brand" href="live.php" style="  color:#87CEEB;"><i class="fa fa-home" aria-hidden="true"></i>
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


            
<a class="activity" href='snapprofile.php?id=<?php echo $ivid; ?>'><img src="pf_images/<?php echo $image; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar1"  style="width:29px">
</a>
</nav> 



    <header class="site-navbar py-0 border-bottom" role="banner">
<!--------------------------------------->

      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2" data-aos="fade-down">
              
           
          
          </div>
          </div>
        </div>
    </header>
 <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      <div class="row" id="lightgallery">
                       <!---------------------------hello world ivsnap--->
                       <?php
                       $name = $_GET['id'];
          
             if($name==$ishu)
             {
                 ?>
                <script>window.location.href = "snapprofile.php";</script>
<?php
             }
             else{
                
             }
          
?>
              <?php
           $name = $_GET['id'];
           				 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE user_id = '$name' ORDER BY id DESC";
                $result = mysqli_query($con,$query);
							 while($row1 = mysqli_fetch_array($result)){
                    $ivid = $row1['id'];
                    $ivs = $row1['name'];
                    $image1 = $row1['profile_pic'];
                   $bio = $row1['user_bio'];
                   $name1 =$row1['user_id'];
                   $iv_email=$row1['email'];
                    $verify = $row1['verified'];
                      ?>
                      <!-- Team Member 1 -->
    <div  class="col-sm-3 col-md-6 mb-4-black-50" >
      <div class="card border-0 shadow">
          <div class="card text-center">
  <div class="card-header">
    <?php echo $name; ?>Profile
  </div>
        <div id="logo"><img src="pf_images/<?php echo $image1; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="card-img-top"></div>
        <div class="card-body text-center">
  <h5 class="card-title mb-0">User-id:<?php echo $name1; ?><?php echo $verify;?></h5>
          <h5 class="card-title mb-0">Snapper Name:<?php echo $ivs; ?></h5>
          <div class="card-text text-black-100">Bio-<?php echo $bio; ?></div>
        
            <div id="response"></div>
        </div>
      </div>
    </div>
</div>
<?php
              }  
            ?>
<!-- Team Member 1 -->
    <div id="iv" class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
       
        <div class="card-body text-center">
            <?php
     
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM iv_fam  WHERE fam_id = '$name'";
               
                $query_run = mysqli_query($connection, $query);
                $count1 = mysqli_num_rows($query_run);
                
            ?>
            <h5 class="card-text text-black">Fam : <?php echo $count1; ?></h5>
            <form id="submit_form">  
            <td><input  type="hidden" name="fname" id="fname" value="<?php echo $id; ?>" /></td>
           
            <td><input type="hidden" name="lname" id="lname" value="<?php echo $ishu; ?>"/></td>
        <td><input  type="hidden" name="value" id="value" value="<?php echo $ivid; ?>" /></td>
         <td><input  type="hidden" name="email" id="email" value="<?php echo $name1; ?>" /></td>
         <td><input  type="hidden" name="fam" id="fam" value="<?php echo $iv_email; ?>" /></td>
          <td><input  type="hidden" name="idpf" id="idpf" value="<?php echo $image1; ?>" /></td>
           <td><input type="hidden"  name="pf" id="pf" value="<?php echo $image; ?>" /></td>
         <?php
     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $q = "SELECT * FROM iv_fam WHERE fam_id = '$name1' AND pf_id = '$iv_pf'";

$result = mysqli_query($connection, $q);

$num = mysqli_num_rows($result);
 $heart = "SELECT * FROM heart_fam WHERE user_id = '$ishu' AND snapper_id = '$name1'";

$result2 = mysqli_query($connection, $heart);

$num2 = mysqli_num_rows($result2);

if($num == 1){
    ?>
    <div class="dropdown">
  <button class="btn btn-black btn-lg btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user-friends"></i> Fam of <?php echo $name1; ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" id="unfam" href="#">Un-Fam</a>
    <a class="dropdown-item"  href='post_report.php?id=<?php echo $ivid; ?>&amp;$ivs=<?php echo $id; ?>'>Report</a>
    
  </div>
</div>
  
    <?php
}else{ 
  ?>
  <button type="button" id="submit" href="#" class="btn btn-lg btn-block btn-outline-dark"><i class="fas fa-user-plus"></i>Add Fam</button>
<?php     
}
 ?>
      
      </form>  
       
          <!-------------------------->
          
<script>

  $(document).ready(function(){
    $("#submit").click(function(){
      var fname = $('#fname').val();
      var lname = $('#lname').val();
       var value = $('#value').val();
        var email = $('#email').val();
        var fam = $('#fam').val();
        var id_pf = $('#idpf').val();
         var pfid = $('#pf').val();

      if(fname == "" || lname == ""){
        $("#response").fadeIn();
        $("#response").html("All Fields are required.");
      }else{
        $.post(
          "save-form.php",
           $("#submit_form").serialize(),
          function(data){
            if(data == 1){
              $("#submit_form").trigger("reset");
              $("#response").fadeIn();
              $("#response").html("Fam Added Sucessfully .");
              setTimeout(function(){
                $("#response").fadeOut();
              },5000);
            }
          }
        );
   
      }
    });
      
  });
</script>
<script> 
$.ajaxSetup({
    cache: false
});
$(function() {
      $("#submit").click(function() {
         $("#iv").load(" #iv")
         evt.preventDefault();
      })
    })</script>
          <!------------------------------>
          <!-------------------------->
          
<script>
  $(document).ready(function(){
    $("#unfam").click(function(){
      var fname = $('#fname').val();
      var lname = $('#lname').val();
       var value = $('#value').val();
        var email = $('#email').val();

      if(fname == "" || lname == ""){
        $("#response").fadeIn();
        $("#response").html("All Fields are required.");
      }else{
        $.post(
          "unfam-form.php",
           $("#submit_form").serialize(),
          function(data){
            if(data == 5){
              $("#submit_form").trigger("reset");
              $("#response").fadeIn();
              $("#response").html("Fam Removed Sucessfully");
              setTimeout(function(){
                $("#response").fadeOut();
              },5000);
            }
          }
        );
   
      }
    });
      
  });
</script>
<script> $(function() {
      $("#unfam").click(function() {
         $("#iv").load(" #iv")
         evt.preventDefault();
      })
    })</script>
          <!------------------------------>
            <!----------notification---------------->
          
<script>
  $(document).ready(function(){
    $("#recieve").click(function(){
      var fname = $('#fname').val();
      var lname = $('#lname').val();
       var value = $('#value').val();
        var email = $('#email').val();

      if(fname == "" || lname == ""){
        $("#response").fadeIn();
        $("#response").html("Failed.");
      }else{
        $.post(
          "heart.php",
           $("#submit_form").serialize(),
          function(data){
            if(data == 11){
              $("#submit_form").trigger("reset");
              $("#response").fadeIn();
              $("#response").html("Sent");
              setTimeout(function(){
                $("#response").fadeOut();
              },5000);
            }
          }
        );
   
      }
    });
      
  });
</script>
<script> $(function() {
      $("#recieve").click(function() {
         $("#iv").load(" #iv")
         evt.preventDefault();
      })
    })</script>
          <!---------notification--------------------->
          <script>
  $(document).ready(function(){
    $("#unrecieve").click(function(){
      var fname = $('#fname').val();
      var lname = $('#lname').val();
       var value = $('#value').val();
        var email = $('#email').val();

      if(fname == "" || lname == ""){
        $("#response").fadeIn();
        $("#response").html("Failed.");
      }else{
        $.post(
          "unheart.php",
           $("#submit_form").serialize(),
          function(data){
            if(data == 10){
              $("#submit_form").trigger("reset");
              $("#response").fadeIn();
              $("#response").html("Unsent:(");
              setTimeout(function(){
                $("#response").fadeOut();
              },5000);
            }
          }
        );
   
      }
    });
      
  });
</script>
<script> $(function() {
      $("#unrecieve").click(function() {
         $("#iv").load(" #iv")
         evt.preventDefault();
      })
    })</script>
        </div>
      </div>
    </div>
			
            
            <hr>
            
              <!--------------------Profilekhkjhkh-------------------------------------------------------->
               <?php
           $name = $_GET['id'];
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
             $id=$_SESSION['user'];
              $name = $_GET['id'];
                 $userid = $ivid;
                $query = "SELECT * FROM snap_upload WHERE name = '$name' ORDER BY id DESC";
                $result = mysqli_query($con,$query);
                $count = mysqli_num_rows($result);
                if ( $count<1 )
                {?>
                 <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="icons/nopost.jpeg" class="card-img-top" alt="...">
        
      </div>
    </div>
                <?php
                } else{
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    $title = $row['name'];
                    $content = $row['title'];
                     $cov = $row['snaps'];
                     $cov1 = $row['pf_link'];
                     $ivuser = $row['iv_userid'];
                    
                    
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
 <p style="float: left;"><h5 class="media-heading"><img src="pf_images/<?php echo $cov1; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar"  style="width:45px"><span style="color: rgb(255, 255, 255);"style="font-family: Courier New, courier;" style="font-size: 35px;"><strong>  <?php echo $title; ?><?php echo $verify;?><strong></span></h7></h5><p><span style="color: rgb(255, 255, 255);"><small><?php echo $content; ?></small><br></span></p></a></p>
      </div>
            
           
      <img src="snaps_images/<?php echo $cov; ?>"  onclick="false" alt="IMage" class="img-fluid"></span>
          
          <div class="row form-group">
                  <div class="col-md-12">
                     
                      
  
                      
                   <span style="color: rgb(255, 255, 255);">  <a type="button" value="Likeeeee" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart"></i><span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span></a></span>

                           <span style="color: rgb(255, 255, 255);"><a type="button" value="Unlike" id="Dislike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart-broken"></i><span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span></a></sapn>
                            <?php
     
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM table_comment WHERE post_id = '$ivuser'";
               
                $query_run = mysqli_query($connection, $query);
                $count1 = mysqli_num_rows($query_run);
                
            ?>
                            <span style="color: rgb(85, 57, 130);"><a href="comment.php?id=<?php echo  $ivuser; ?>" class="unlike" role="button"><i class="icon-comment"></i><?php echo"$count1";?></span>
</a>
                  </div>
                </div>
               
        </div>
        
         <?php
                }
                }
            ?>
            
         <!--------------------------rujgjhjyfb---------------------------->
  </div>
 
  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
     
      </p>
    </div>
  </div>


    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>



  <script src="js/main.js"></script>
 
  </body>
</html>

    