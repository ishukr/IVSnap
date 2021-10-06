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
    <title>IV &mdash;Smash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
.avatar1 {
  vertical-align: middle;
  width: 10px;
  height: 28px;
  border-radius: 50%;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
    
  <nav class="navbar fixed-bottom navbar-dark bg-black py-1 ">
  <a class="navbar-brand" href="live.php" style="  color:#87CEEB;"><i class="fa fa-home" aria-hidden="true"></i>
</a>
   <a class="navbar-brand"  href="search.php"><i class="fa fa-search" aria-hidden="true"></i>
</a>

    

  <a class="navbar-brand" href="#" onclick="sanp_upload();"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
 <script type="text/javascript">
     function sanp_upload(){
         window.location.replace("snap_upload.php");
     }
 </script>
  
    
   <div id="iv_auto">
          <?php
     $id = $_SESSION["user"];
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
 $query = "SELECT * FROM user_activity WHERE email = '$id' && status = '0' ";
               
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
                    $ivs = $row['name'];
                    $image=$row['profile_pic'];
              
                      ?>

					
      
			<?php
              }  
            ?>
            
<a class="activity" href='snapprofile.php?id=<?php echo $ivid; ?>'><img src="pf_images/<?php echo $image; ?>" onerror="this.src='https://ivsmart.tech/pf_images/person.jpg'" class="avatar1"  style="width:29px">
</a>
</nav>


    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
           
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

             

         

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  <div class="site-section" data-aos="fade">
    <div class="container-fluid">
      <div class="inner">

    
  </div>
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Report post</h2>
            </div>
          </div>
<?php
                $msg=""; 
                if(isset($_GET['error1'])) 
                {
                $msg ="Post Reported";
                echo'<div  class="btn btn-info btn-lg btn-block">'.$msg.'</div>';
                }
                $msg=""; 
                if(isset($_GET['error2'])) 
                {
                $msg ="Post Not Reported Try Again";
                echo'<div  class="btn btn-danger">'.$msg.'</div>';
                }
                 $msg=""; 
                if(isset($_GET['error3'])) 
                {
                $msg ="Post Reported";
                echo'<div  class="btn btn-info">'.$msg.'</div>';
                }
                
                
                 ?> 
          <div class="row">
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
            $idiv = $row['profile_pic']; 
             $nam = $row['user_id'];}}
             
             $na = $_GET['$ivs']; 
        $naaf = $_GET['id'];
        if($ivs == "")
        {
            echo hello;
        }
        ?>
            <div class="col-lg-8 mb-5">
              <form method="post" action="report.php" enctype="multipart/form-data">
               <div class="container">
  <label class="text-black" for="subject">What irrelevant you found about this post</label>
    <div class="radio">
  <label><input type="radio" name="optradio" value="Abusive" required>Abusive</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="Inappropriate" required>Inappropriate</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="Copied&Flamed" required>Copied&Flamed</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="Violance" required>Violance</label>
</div>
</div>
<input   type="hidden"  class="form-control" name="id" value="<?php echo $na;?>" >
                <input   type="hidden" class="form-control" name="postid" value="<?php echo $naaf;?>" >
                <input  type="hidden"  class="form-control" name="userid" value="<?php echo $nam;?>" >

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Describe more.....</label> 
                    <textarea name="message" id="message" cols="30" rows="7" maxlength="150" class="form-control" placeholder="Describe................"></textarea>
                  </div>
                </div>
                  <div class="col-md-6">
                    
   
    <input type="submit" id="btn" name="submit" class="btn btn-success btn-lg btn-block" value="Report">
   
                  </div>
                </div>

                

                

    
              </form>
            </div>
           
              
            </div>
          </div>
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
