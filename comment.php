<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:index.php"); // redirects them to homepage
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
  
  border: 0px;
  color: black;
 
 
 
  
  font-size: 20px;
  
 
  
 
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
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
</style>
<style>
.avatar1 {
  vertical-align: middle;
  width: 45px;
  height: 45px;
  border-radius: 50%;
}

</style>



<script type="text/javascript">
function check_val()
{
 var bad_words=new Array("death","kill","murder","fuck");
 var check_text=document.getElementById("text").value;
 var error=0;
 for(var i=0;i<bad_words.length;i++)
 {
  var val=bad_words[i];
  if((check_text.toLowerCase()).indexOf(val.toString())>-1)
  {
   error=error+1;
  }
 }
	
 if(error>0)
 {
  document.getElementById("bad_notice").innerHTML="Pehali fursat me Nikal";
 }
 else
 {
  document.getElementById("bad_notice").innerHTML="";
 }
}
</script>
<script>
    
function success1() {
	 if(document.getElementById("text").value==="") { 
            document.getElementById('button1').disabled = true; 
        } else { 
            document.getElementById('button1').disabled = false;
        }
    }
</script>

  </head>
  <body  style="background-color: black;">
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="navbar navbar-white bg-black">
  <a class="navbar-brand" href="live.php" style="color:#87CEEB; font-size:30px">
    <i class="fas fa-arrow-circle-left"></i>
    </a>
</nav>
 



  <div class=""  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
         
          </div>
        
         <?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ivid = $row['id'];
                    $ivs = $row['name'];
                    $iod = $row['user_id'];
                    
              
                      ?>

					
      
			<?php
              }  
            ?>
         
             <?php
             
             $id=$_SESSION['user'];
              $name = $_GET['id'];
               
                 $userid = $ivid;
                $query = "SELECT * FROM snap_upload WHERE iv_userid = '$name'";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['id'];
                    $title = $row['name'];
                    $content = $row['title'];
                     $cov = $row['snaps'];
                     $user_imp = $row['email'];
                      $cov1 = $row['pf_link'];
                    $very =$row['verify'];
                    
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

 <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="snaps_images/<?php echo $cov; ?>" data-sub-html="<h4><?php echo $title; ?></h4><p><?php echo $content; ?></p>">
            <div class="media-right">
      <a href='view_profile.php?id=<?php echo $title; ?>'>              
   <p style="float: left;"><h5 class="media-heading"><img src="pf_images/<?php echo $cov1; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar1"  style="width:45px"><span style="color: rgb(255, 255, 255);" style="font-size:45px;"> <?php echo $title; ?> <?php echo $very;?></span></span></h5><small style="color: rgb(255, 255, 255);">-<?php echo $content; ?></small></a></p>
   </a>
    <!--style="border:2px solid red;"--->
  
 
  </div>
            
           <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
       <img src="snaps_images/<?php echo $cov; ?>" alt="IMage" class="card-img-top"></span>
       
          </div>
          </div>
          <div class="row form-group">
                  <div class="col-md-12">
             <span style="color: rgb(255, 255, 255);"><a type="button" value="Likeeeee" id="like_<?php echo $postid; ?>" class="like" style="<?php if($type == 1){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart"></i><span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span></a></span>

                           <span style="color: rgb(255, 255, 255);"><a type="button" value="Unlike" id="Dislike_<?php echo $postid; ?>" class="unlike" style="<?php if($type == 0){ echo "color: #c61f1f;"; } ?>" /><i class="fas fa-heart-broken"></i><span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span></a></sapn>
                   </div>
                </div>

        
        </div>
    
            
    <?php
                }
            ?>
            

      </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-10 mb-4">
      
       
      
<form method="post" action="comment_send.php?id=<?php echo $name; ?>&ivs=<?php echo $user_imp; ?>" enctype="multipart/form-data">
    <div class="input-group mb-3">
  <input type="text"  id="text" onkeyup="success1()" class="form-control" name="comment" placeholder="Appreciate" aria-label="Appreciate" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" name="post" type="submit" id="button1" disabled><i class="fa fa-paper-plane" aria-hidden="true"></i>

</button>

</div>
</form>

</div>
</div>   

  <?php
             
             $id=$_SESSION['user'];
              $name = $_GET['id'];
               $user=$user_imp;
                 $userid = $id;
                $query = "SELECT * FROM table_comment where post_id= '$name' ORDER BY id DESC";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $postid = $row['post_id'];
                    $replyid = $row['id'];
                   
                    $content = $row['comment'];
                     $cov = $row['user_comment'];
                     $cov1 = $row['pf_link'];
                    $verify_reply = $row['verified_reply'];
                    $timestamp=$row['date'];
                    $type = -1;

?>   

<div class="card">
  <div class="card-header">
      <div class="float-right">
  <a type="button" class="dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span style="color:#000000;"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
   
    
    <?php
    if($iod == $cov)
    {
        ?>
        <form id="submit_form">  
            <td><input type="hidden" name="fname" id="fname" value="<?php echo $content; ?>" /></td>
           
            <td><input type="hidden" name="lname" id="lname" value="<?php echo $cov; ?>"/></td>
            <td><input  type="hidden" name="value" id="value" value="<?php echo $postid; ?>" /></td>
            </form>
         <a class="dropdown-item" href='#' id="delete">Delete</a>
   <?php
    }
    else{
    ?>
    <a class="dropdown-item" href='post_report.php?id=<?php echo $cov; ?>&amp;$ivs=<?php echo $postid; ?>'>Report</a>
    
    
  

    <!-----popup--------->
    <?php
    }?>
   
  </div>
</div>

      <a class="pull-left" href='view_profile.php?id=<?php echo $cov; ?>'>
                          <img class="avatar" src="pf_images/<?php echo $cov1; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" alt="profile">
                          
                        </a>
    <cite  title="Source Title">@<?php echo $cov; ?> <?php echo $verify_reply;?></cite>
     <div class="float-right"><footer class="blockquote-footer" style="padding-top: 55px;"><?php echo time_elapsed_string($timestamp);?> <cite title="Source Title">ivsnap</cite></footer></div>
     
     <p style="padding-left: 55px;"><span style='font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;'> <?php echo $content; ?></span></p>
     <!----jhs------->
     <?php
    if($user_imp == $id)
    {
        ?>
<form  method="post" action="comment_reply.php?id=<?php echo $name; ?>&ivs=<?php echo $replyid; ?>&iv=<?php echo $cov; ?>" enctype="multipart/form-data">
    <div class="input-group mb-3">
  <input type="text"  id="textsend" onkeyup="success()" class="form-control" name="repl" placeholder="Reply..." aria-label="Appreciate" aria-describedby="basic-addon2" required>
  <div class="input-group-append">
      
    <button class="btn btn-outline-info" name="reply" type="submit" id="button" ><i class="fa fa-paper-plane" aria-hidden="true"></i>

</button>

</div>
</div>
</form>

  <?php
    }
  
    ?>

    
          <?php
     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM reply_comment WHERE post_id = '$postid' && fam_id = '$replyid' ";
               
                $query_run = mysqli_query($connection, $query);
                $count = mysqli_num_rows($query_run);
                if ( $count<1 )
                {
                    $count='';
                }
                if ( $count>9 )
                {
                    $count='9+';
                }
                if ( $count>99 )
                {
                    $count='99+';
                }
                
                
                
            ?> 
  <p class="text text-info float-right" >
     
      <a href="post_rep.php?ivd=<?php echo $replyid;  ?>&id=<?php echo $postid; ?>">
     see <?php echo $count; ?> replies</a>
    
    
  </p>

  


<!--------->
  </div>
  </div>
 
  
<script>

  $(document).ready(function(){
    $("#delete").click(function(){
      var fname = $('#fname').val();
      var lname = $('#lname').val();
       var value = $('#value').val();
        

      if(fname == "" || lname == ""){
        $("#response").fadeIn();
        $("#response").html("All Fields are required.");
      }else{
        $.post(
          "delete_comment.php",
           $("#submit_form").serialize(),
          function(data){
            if(data == 1){
              $("#submit_form").trigger("reset");
              $("#response").fadeIn();
               location.reload(true);
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
      $("#delete").click(function() {
         $("#iv").load(" #iv")
         evt.preventDefault();
      })
    })</script>
 <!--------------------------------------------------------------------------------------->      
    
            
    <?php
                }
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
    
  

<script language="javascript">

document.write(unescape('%0A%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6A%71%75%65%72%79%2D%33%2E%33%2E%31%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6A%71%75%65%72%79%2D%6D%69%67%72%61%74%65%2D%33%2E%30%2E%31%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6A%71%75%65%72%79%2D%75%69%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%70%6F%70%70%65%72%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%62%6F%6F%74%73%74%72%61%70%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6F%77%6C%2E%63%61%72%6F%75%73%65%6C%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6A%71%75%65%72%79%2E%73%74%65%6C%6C%61%72%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%73%77%69%70%65%72%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%61%6F%73%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%70%69%63%74%75%72%65%66%69%6C%6C%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6A%71%75%65%72%79%2E%6D%6F%75%73%65%77%68%65%65%6C%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%0A%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%2E%2E%2F%6A%73%2F%6D%61%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%20%20%0A%20'));
//-->
</script>
  
    
  </body>
</html>
