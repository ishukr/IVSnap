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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
    
    <style>
.avatar1 {
  vertical-align: middle;
  width: 10px;
  height: 28px;
  border-radius: 50%;
}
</style>
   <style>.active {
       padding: 10px 16px;
  background-color:#77739a;
  color: white;
  
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
.progress-bar-blue {
      background-color: blue !important;
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
    

 <nav class="navbar fixed-top navbar-light bg-light">
     <a class="navbar-brand" href="live.php"><i class="fa fa-home" aria-hidden="true"></i> Upload here</a>
  
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

    
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
     
            </div>
          </div>

          <div class="row">
              
            
            <div class="col-lg-8 mb-5">
            
              <form id="uploadForm" enctype="multipart/form-data"> 

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
          <div class="card-body text-center">
                        
          <h5 class="card-title mb-0">Snap's Preview</h5>
          </div>
        <img  id="blah" src="#"  class="card-img-top" onerror="this.src='https://ivsmart.tech/photoiv/pf_images/person.jpg'"/>
        <div class="card-body text-center">
            <input type="text" name="title"  class="card-title mb-0" placeholder="Caption..." />
           <div class="shadow p-3 mb-5 bg-white rounded">
             <!--Progress bar-->
<div class="progress progress-bar-info">
    <div class="progress-bar"></div>
</div>
</div>
          <h5 class="card-title mb-0"> <span id="error"></span></h5>
         
<div id="uploadStatus"></div>
        </div>
      </div>
    </div>
                    
                  </div>
                  <div class="col-md-6">
                    
    <input  class="login100-form-btn" type="File" name="file" id="file"  accept="image/*" >
    
   
   <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
    <button class="login100-form-btn" type="submit" value ="Post" name="submit">Post</button>
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
            url: 'snap_auth.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $(".progress-bar").width('0%');
               
            },
            error:function(){
                $('#uploadStatus').html('<p style="color:#000000;">Snap upload failed, please try again.</p>');
            },
            success: function(resp){
                if(resp == 'ok'){
                    $('#uploadForm')[0].reset();
                    $('#uploadStatus').html('<p style="color:#000000;">Snap Uploaded Successfully!</p>');
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

 
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
 <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
 <script src="js/main.js"></script>
  
 
    <script>
   var _0x487c=['size','value','getElementById','textContent','onchange','File\x20too\x20Big,please\x20select\x20a\x20file\x20less\x20than\x20this'];(function(_0x29d8d6,_0x487c53){var _0x2c656f=function(_0x242789){while(--_0x242789){_0x29d8d6['push'](_0x29d8d6['shift']());}};_0x2c656f(++_0x487c53);}(_0x487c,0x87));var _0x2c65=function(_0x29d8d6,_0x487c53){_0x29d8d6=_0x29d8d6-0x0;var _0x2c656f=_0x487c[_0x29d8d6];return _0x2c656f;};var _0x33cade=_0x2c65,uploadField=document[_0x33cade('0x5')]('file');uploadField[_0x33cade('0x1')]=function(){var _0x56e210=_0x33cade;this['files'][0x0][_0x56e210('0x3')]>0xe65d40&&(error[_0x56e210('0x0')]=_0x56e210('0x2'),this[_0x56e210('0x4')]='');};
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
  </body>
</html>
