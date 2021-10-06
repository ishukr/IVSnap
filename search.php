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
    <title>I &mdash; V</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>
  <style>
  #ivteam {
  list-style-type: none;
  padding: 10px;
  margin: 0px;
}

#ivteam div a {
  
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block
}

</style>  
 <style>
.avatar1 {
  vertical-align: middle;
  width: 10px;
  height: 28px;
  border-radius: 50%;
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


  </head>
  <body style="background-color:    #000000;">
  
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
    
     <a class="navbar-brand" href="live.php"><i class="fa fa-home" aria-hidden="true"></i> Search Snap's User</a>
  
</nav>



   



  <div class="site-section" data-aos="fade">
    <div class="container-fluid">
       
      <div class="row justify-content-center">
        <div class="col-md-7">
       <br>
   <div class="row">
            <div class="col-lg-8 mb-5">
     <div class="row form-group">
                    
                   <div class="col-md-12">
                   
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  
                  <input type="text" id="searchInput" placeholder="Search Users" size="35">
                  </div>
                 <?php
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');

                $query = "SELECT * FROM snap_data WHERE verified_state = '1'";
                $query_run = mysqli_query($connection, $query);
                
            ?>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
            
            
               
  
  <?php
     
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');
                $name =$row['user_id'];
 $query = "SELECT * FROM iv_fam  WHERE fam_id = '$name'";
               //snaper
                $query_run = mysqli_query($connection, $query);
                $count1 = mysqli_num_rows($query_run);
                
            ?>
              <div  class="container-fluid text-left" id="ivteam">
               <div id="ivteam" class="card">
  <div class="card-header">
      <a class="pull-left" href='view_profile.php?id=<?php echo $row['user_id']; ?>'>
                          <img class="avatar" src="pf_images/<?php echo $row['profile_pic']; ?>" onerror="this.src='https://ivsnap.com/pf_images/person.jpg'" alt="profile">
                          <?php echo $row['user_id']; ?>&nbsp;<?php echo $row['verified']; ?>&nbsp;&nbsp;<cite title="Source Title">Fam:<?php echo $count1; ?></cite>
                        </a>
                        </div>
</div>
              </div>
              
 <?php           
                    }
                }
                else 
                {
                    ?>
                   
                    
                    <?php
                }
            ?>

           
          
 








<script>
var _0x5465=['indexOf','#searchInput','toUpperCase','each','show','hide','keyup','val','#ivteam\x20div','text'];(function(_0x34d7d5,_0x54657a){var _0x48912f=function(_0x4bf319){while(--_0x4bf319){_0x34d7d5['push'](_0x34d7d5['shift']());}};_0x48912f(++_0x54657a);}(_0x5465,0x177));var _0x4891=function(_0x34d7d5,_0x54657a){_0x34d7d5=_0x34d7d5-0x0;var _0x48912f=_0x5465[_0x34d7d5];return _0x48912f;};var _0x4750cc=_0x4891;$(_0x4750cc('0x6'))['on'](_0x4750cc('0x1'),function(){var _0x4880e9=_0x4750cc,_0x4bf319=$(this)[_0x4880e9('0x2')]()[_0x4880e9('0x7')]();_0x4bf319['length']>0x0?searchAndFilter(_0x4bf319):$(_0x4880e9('0x3'))['hide']();});function searchAndFilter(_0x89a02e){var _0x148220=_0x4750cc;$('#ivteam\x20div')[_0x148220('0x8')](function(){var _0x1479e7=_0x148220,_0x2a6506=$(this)[_0x1479e7('0x4')]()[_0x1479e7('0x7')]();_0x2a6506[_0x1479e7('0x5')](_0x89a02e)>=0x0?$(this)[_0x1479e7('0x9')]():$(this)[_0x1479e7('0x0')]();});}$(document)['ready'](function(){var _0x5df279=_0x4750cc;$(_0x5df279('0x3'))[_0x5df279('0x0')]();});
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});

</script>

    

    
    
  </div>
  </div>
  </div>
  </div>
  </div>
</div></div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  

  <script src="js/aos.js"></script>

  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  
    
  </body>
</html>