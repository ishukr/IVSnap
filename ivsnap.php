<!DOCTYPE html>
<html lang="en">
  <head>
   <title>ivsnap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" type="text/css" href="login/css/main.css">
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
input[type=email] {
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=email]:focus {
  border: 2px solid #000000;
}
input[type=password] {
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
  border: 3px solid #000000;
}

</style>

  </head>
  <body>
  <div class="fixed">
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <br>
    <br>
     <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
     
          <span style="padding: 20px;" ><img src="icons/blacksnap.png" class="card-img-top"></span>
       <?php
                $msg=""; 
                if(isset($_GET['block'])) 
                {
                $msg ="Your account is unverified";
                echo'<div class="alert alert-danger">'.$msg.'</div>';
                }
                if(isset($_GET['pa'])) 
                {
                $msg ="Account not found";
                echo'<div class="alert alert-danger">'.$msg.'</div>';
                }
                 if(isset($_GET['notdeleted'])) 
                {
                $msg ="Not Deleted Check Your Email And Password";
                echo'<div class="alert alert-danger">'.$msg.'</div>';
                }
                 if(isset($_GET['deleted'])) 
                {
                $msg ="Your Account Has Been Deleted";
                echo'<div class="alert alert-danger">'.$msg.'</div>';
                }
                $msg=""; 
                if(isset($_GET['bl'])) 
                {
                $msg ="Email and Password is required";
                echo'<div class="alert alert-danger">'.$msg.'</div>';
                }
                $msg=""; 
                if(isset($_GET['ter'])) 
                {
                $msg ="Your account has been Blocked Contact Ivsnap support to Know more about it";
                echo'<div class="alert alert-danger">'.$msg.'</div>';
                }
                $msg=""; 
                if(isset($_GET['pass'])) 
                {
                $msg ="Either Email/Password is Incorrect";
                echo'<div class="alert alert-info">'.$msg.'</div>';
                }
                if(isset($_GET['success'])) 
                {
                $msg ="Password Recoverd Login with new password";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                if(isset($_GET['not_success'])) 
                {
                $msg ="Password not updated try again";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                if(isset($_GET['logout'])) 
                {
                $msg ="Logged Out Successfully";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                 if(isset($_GET['verify'])) 
                {
                $msg ="Email Verified Successfully Login now!!";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                
                
                 ?> 
      </div>
      
      <br>
    </div>
      <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      
       
        <div class="card-body text-center">
          <form method="post" action="snaplogin.php">
  <div class="form-group">
    
    <input type="email" name="email" class="rounded" value="<?php if(isset($_COOKIE['emailcookie'])){echo $_COOKIE['emailcookie'];}?>" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" >
   
  </div>
  <div class="form-group">
    
    <input type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])){echo $_COOKIE['passwordcookie'];}?>"  class="rounded" id="ivpassword" placeholder="Password">
  </div>
  <div class="form-group">
    <input type="checkbox" class="form-check-input" name="remember" >
    <label class="form-check-label" >Remember me</label>
  </div>
 
  <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Login
							</button>
						</div>
						
						 
					</div>
					
</form>

        </div>
        
        
     
      
        <div class="card-body text-center">
           
           
           
          <h5 class="card-title mb-0">Forgot Password-<a href="ivpassword_reset"><span style="color: rgb(44, 130, 201);">Click here</span></a></h5>
          
          <h5 class="card-title mb-0">Dont have account-<a href="snap"><span style="color: rgb(44, 130, 201);">Sign-up</span></a></h5>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Notice
  </a>
  <div class="collapse" id="collapseExample">
  <!-- <div class="card card-body">
  <p style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><strong>Dear IVsnap Users,</strong></span></p>
<p style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><br>We regret to inform you that we have decided to close down our IVsnap. Our last day of Working will be on 20th-June 2021. After that date, IVsnap will no longer be offering services to you. The decision to close down this App was not an easy one ☹️☹️ and we enjoyed the service delivering them to you.</span></p>
<p style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><br>We would like to thank all of our Users for using our app and this could not have been as successful as it was without your loyalty. <strong>If you&rsquo;re brave enough to say goodbye, life will reward you with a new hello.</strong></span></p>
<p style="text-align: center;"><span style="font-family: Impact, Charcoal, sans-serif;"><br><strong>Important</strong></span></p>
<p style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;">Your Data Will be deleted Automatically From Our Server on 19th-June<br>If You want to delete your personal data from the app you can simply click me</span>
<a href="deletemyaccount" class="badge badge-primary">Click me to delete your account</a></p>
<p style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><br></span></p>
<p style="text-align: left;"><span style="font-family: Impact, Charcoal, sans-serif;"><br><strong>Sincerely,<br>Founder Nandan Mishra<br>Co-Founder &amp; CEO: Ishu Kumar</strong><br><br><br><br></span></p>
  </div> -->
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