<?php

include 'confi.php';

if(isset($_POST['username'])){
    $username = $_POST['username'];

    $query = "select count(*) as cntUser from snap_data where user_id='".$username."'";
    
    $result = mysqli_query($con,$query);
    $response = "<span class='alert alert-primary' style='color: blue;'>Username  Available.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['cntUser'];
        
        if($count > 0){
            $response = "<span class='alert alert-danger' style='color: red;'> Username Not Available.</span>";
        }
       
    }
    
    echo $response;
    die;
}
