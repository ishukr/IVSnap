<!DOCTYPE html>
<html lang="en">
  <head>
   
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
    <script src="username/jquery-3.1.1.min.js" type="text/javascript"></script>
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
     <script>
     
            $(document).ready(function(){

                $("#txt_username").keyup(function(){

                    var username = $(this).val().trim();
                    var maxLength = 15;
                var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
            
                    if(username != ''){
            
                       
            
                        $.ajax({
                            url: 'ajaxfile.php',
                            type: 'post',
                            data: {username: username},
                            success: function(response){
                
                                $('#uname_response').html(response);
                
                             }
                        });
                    }else{
                        $("#uname_response").html("");
                    }
            
                });

            });
        </script>

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
  border: 3px solid #000000;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    <div class="col-xl-3 col-md-6 mb-4">
     
           <span style="padding: 20px;" ><img src="icons/blacksnap.png" class="card-img-top"></span>
       
      </div>
      
      <br>
    </div>
      <!-- Team Member 1 -->
      
      
    <div class="col-xl-3 col-md-6 mb-4">
      
       
        <div class="card-body text-center">
          <form method="post" action="snapregister.php" name="sign" id="snapper" onsubmit="return validateForm()">
              <div class="form-group">
                  	<div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
           <div class="card-body text-center">
   <div id="message">
  
  <p id="letter" class="invalid">-<b>lowercase</b> letter</p>
  <p id="capital" class="invalid">-<b>Caps</b> letter</p>
  <p id="number" class="invalid">-<b>number</b></p>
  <p id="length" class="invalid">-Minimum <b>8 letters</b></p>
</div>
  </div>
  </div>
  </div>
    <?php
    $msg=""; 
                if(isset($_GET['error1'])) 
                 
                {
                $msg ="Username Already Exist";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                ?>
                 <!-- Response -->
            <div id="uname_response" ></div>
            <div id="demo"></div>
            <p><span style="font-family: Impact, Charcoal, sans-serif; font-size: 10px;">User-name limit:<span id="rchars">15</span> Character&apos;s</span></p>
    <input type="text" name="userid" class="rounded" id="txt_username"  placeholder="Username"   maxlength="15">
    
  </div>
 
 
 
 
 
 
 
   <div class="form-group">
     <div id="demo1"></div>
    <input type="text" name="name" class="rounded" id="ivpassword" placeholder="Name">
   
  </div>
  <?php
    $msg=""; 
                if(isset($_GET['error'])) 
                 
                {
                $msg ="Email Already Registered";
                echo'<div class="alert alert-primary">'.$msg.'</div>';
                }
                ?>
  <div class="form-group">
    <div id="demo2"></div>
    <input type="email" name="email" class="rounded"  aria-describedby="emailHelp" placeholder="Email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" >
   
  </div>
  
  <div class="form-group">
      
    <div id="demo3"></div>
    <input type="password" name="password" class="rounded" id="psw" placeholder="Password" >
    
  </div>
  
 
  <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="btn" class="login100-form-btn">
							Sign-Up
							</button>
						</div>
						
						 
					</div>
				
					<div id="thank_you_msg"></div>
					
</form>

        </div>
       
        
        <div class="col-xl-3 col-md-6 mb-4">
     
      
        <div class="card-body text-center">
          
      </div>
    </div>

      </div>
    </div>


  
    

    
    
  </div>
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
<script>
function validateForm() {
  var x = document.forms["sign"]["userid"].value;
   var y = document.forms["sign"]["name"].value;
    var z = document.forms["sign"]["email"].value;
     var a = document.forms["sign"]["password"].value;
      
  
  if (x == "") {
    var str = "Username required";
  
    document.getElementById("demo").innerHTML = str;
    return false;
  }
  if (y == "") {
    var str = "Name required";
  
    document.getElementById("demo1").innerHTML = str;
    return false;
  }
  if (z == "") {
    var str = "Email required";
  
    document.getElementById("demo2").innerHTML = str;
    return false;
  }
  if (a == "") {
    var str = "Password required";
  
    document.getElementById("demo3").innerHTML = str;
    return false;
  }
  
}
</script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  
  <script src="js/jquery.magnific-popup.min.js"></script>
  
  
  <script src="js/aos.js"></script>


  <script src="js/main.js"></script>
  
  
    
  </body>
</html>