 
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
  background-color: #f5f5f5;
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
  width: 10px;
  height: 28px;
  border-radius: 50%;
}

</style>

  </head>
  <body style="background-color:    #000000;">
  
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
   
<a class="navbar-brand" href="fam_post.php"><i class="fas fa-user-friends"></i></a>
    
   
     <a class="navbar-brand" href="snap_upload.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>
    
   <div id="iv_auto">
           <?php
     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM user_activity WHERE email = '$id' && status = '0' ";
               
                $query_run = mysqli_query($connection, $query);
                $count = mysqli_num_rows($query_run);
                if ( $count>9 )
                {
                    $count='9+';
                }
                if ( $count>99 )
                {
                    $count='99+';
                }
                
                
                
            ?> 
            
 <a class="navbar-brand"  href="comment_activity.php"><i class="fas fa-envelope-open-text"></i><span  class="badge badge-notify" ><?php echo"$count"; ?></span></a>
 
</a>


</div>
<script type="text/javascript">
    setInterval("my_function();",1000); 
    function my_function(){
      $('#iv_auto').load(location.href + ' #iv_auto');
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
                   
                    $image=$row['profile_pic'];
              
                      ?>

					
      
			<?php
              }  
            ?>
            
<a class="activity" href='snapprofile.php?id=<?php echo $ivid; ?>'><img src="pf_images/<?php echo $image; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" class="avatar1"  style="width:29px">
</a>
</nav>

<nav class="navbar fixed-top navbar-light bg-light py-0">
  <a class="navbar-brand" href="#">Fam's-List</a>
</nav>

    <header class="site-navbar py-2 bottom" role="banner">
<!--------------------------------------->

      
        
       
              
              
          
    </header>
 <div class="site-section"  data-aos="fade">
    
     
        

					
      
			
                
        
          <?php
							 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM iv_fam WHERE state_id = '$id'";
                $result = mysqli_query($con,$query);
							 while($row1 = mysqli_fetch_assoc($result)){
                    $ivss = $row1['snaper_id'];
                    $ivs = $row1['snaper_id'];
                    $ivis = $row1['pf_id'];
                   $cov1 = $row1['snaper_status']; 
                 
              ?>
                 
				  
          <div id="iv" class="card">
  <div class="card-header">
      <a class="pull-left" href="view_profile.php?id=<?php echo  $ivs; ?>">
                          <img class="avatar" src="pf_images/<?php echo $cov1; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" alt="profile">
                          
                        </a>
    <cite  title="Source Title"><?php echo $ivi; ?> <a href="view_profile.php?id=<?php echo  $ivs; ?>"  role="button" style="  color:#87CEEB;"></cite><span style="color:#000000;"style="font-family: Courier New, courier;" style="font-size: 35px;"><strong><?php echo"$ivs"?></strong></span></a>
             <!----div class="float-right">
  <a type="button" class="dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    
    <a class="dropdown-item" id="unfam" href="#">Un-Fam</a>
    <a class="dropdown-item" href="#">Report</a>
    <a class="dropdown-item" id="recieve" href="#"> Fam Notification</a>
  </div>
    
 
</div>
<form id="submit_form">  
            <td><input type="hidden" name="fname" id="fname" value="<?php echo $id; ?>" /></td>
           
            <td><input type="hidden" name="lname" id="lname" value="<?php echo $ivss; ?>"/></td>
        <td><input  type="hidden" name="value" id="value" value="<?php echo $ivid; ?>" /></td>
         <td><input  type="hidden" name="email" id="email" value="<?php echo $ivs; ?>" /></td>
          <td><input  type="hidden" name="idpf" id="idpf" value="<?php echo $image1; ?>" /></td>
      </form>  
</div>
     
    
 
</button---->

 
  </div style="padding-bottom: 15px;">	
      
		
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
					
       
		<?php
		}
                      ?>
		   			
      </div>
        
		<!-------------------------->
          

       
            
  
 
 


    
    
 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  
 
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  
   
  </body>
</html>

            