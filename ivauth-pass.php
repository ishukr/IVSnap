<?php
if(isset($_POST['submit_otp']))
{
    include "db.php";
     $iv_auth=$_GET['authid'];
    $ivsnap=$_POST["ivauth_code"];
 
    $result = mysqli_query($conn,"SELECT * FROM snap_data WHERE code='" . $ivsnap . "' && token = '".$iv_auth."'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {?>
     <!DOCTYPE html>
<html lang="en">
  <head>
   <title>ivSnap</title>
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


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #fff;
  color: #fbffff;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}


/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: blue;
}

.valid:before {
  position: relative;
  right: 5px;
  content: "Ok";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  right: 5px;
  content: ":(";
}
</style>
    <style> 
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
                $msg ="Cant Find Your Snap Account";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                 $name = $_GET['authid'];
                ?>
       
        <div class="card-body text-center">
           
          <form method="post" action="ivreset_password.php?authid=<?php echo "$name";?>">
  <div class="form-group">
    <span>Enter the Password</span>
    <input type="password" name="ivreset_password" class="rounded"  id="psw" aria-describedby="emailHelp" placeholder="Minimum 8 characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
    
  </div>
 
 
  <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit_otp" class="login100-form-btn">
								Reset
							</button>
						</div>
						
						 
					</div>
					
</form>

        </div>
        <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
           <div class="card-body text-center">
   <div id="message">
  
  <p id="letter" class="invalid">-<b>lowercase</b> letter</p>
  <p id="capital" class="invalid">-<b>Caps</b> letter</p>
  <p id="number" class="invalid">-<b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 letters</b></p>
</div>
  </div>
  </div>
  </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
     
      
        <div class="card-body text-center">
        
        
      </div>
    </div>

      </div>
    </div>


  
    

    
    
  </div>
<!-- Scripts -->
		<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
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
 <?php
 }else{
   header('location:ivauthid_snap.php?recovery_id='.$iv_auth."&error");
  
  }
}
?>