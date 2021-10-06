
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>IVsnap</title>
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
input[type=text] {
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 2px solid #000000;
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
    <br>
    <br>
    
     <!-- Team Member 1 -->
    
      
      <br>
    </div>
      <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <?php
    $msg=""; 
                if(isset($_GET['error'])) 
                 
                {
                $msg ="Invalid Code";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                 $name = $_GET['recovery_id'];
                ?>
       
        <div class="card-body text-center">
           
          <form method="post" action="ivauth-pass.php?authid=<?php echo "$name";?>">
  <div class="form-group">
    <span>We have sent a code on your E-mail</span>
    <input type="text" name="ivauth_code" class="rounded"  aria-describedby="emailHelp" placeholder="Enter the code here"  required>
   
  </div>
 
 
  <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit_otp" class="login100-form-btn">
								Validate
							</button>
						</div>
						
						 
					</div>
					
</form>

        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
     
      
        <div class="card-body text-center">
        
        
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
 
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  

    
  </body>
</html>
