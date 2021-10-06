<?php
session_start();
session_destroy();
setcookie('emailcookie','',time()-3600*24*365);
setcookie('passwordcookie','',time()-3600*24*365);
header('location:ivsnap.php?logout');

?>