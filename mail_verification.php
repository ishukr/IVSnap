<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>IVsnap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
   
<link rel="stylesheet" type="text/css" href="login/css/main.css">
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
            .head {
 
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(#FFCC66, #CC3366);
}

        </style>
    <style> 
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
input[type=number] {
  -moz-appearance: textfield;
}
input[type=number] {
  width: 100%;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=number]:focus {
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
                 
                ?>
       
        <div class="card-body text-center">
           
          <form method="post" action="mail_function.php">
  <div class="form-group">
      <?php $id= $_SESSION['varname'];
      ?>
    <span>We have sent a code on your E-mail</span>
    <input type="number" name="ivauth_code" class="rounded"   placeholder="Enter the code here" >
   
  </div>
 
 <p style="text-align: right;">Hold on it takes time</p>
  <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit_code"  class="login100-form-btn">
								Verify
							</button>
						</div>
						<div id="response" ></div>
						
						 
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

<script>var timeLeft = 60;
var elem = document.getElementById('some_div');
var timerId = setInterval(countdown, 1000);

function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
    } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
    }
}

function doSomething() {
   var result = "Resend Code";
    var str = '<button type="button" class="head">Resend Code</button>';
  var result = str.link("mail_resend.php?id=<?php echo $id;?>");
    document.getElementById("some_div").innerHTML = result;
}</script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <script src="js/main.js"></script>
  

    
  </body>
</html>
