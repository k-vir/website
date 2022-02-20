<?php
// PHP code to extract IP 
$tmp_user_ip = "1";
  
function getVisIpAddr() {
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
  
// Store the IP address
$tmp_u_ip = getVisIPAddr();

  
// Display the IP address
// echo $tmp_ur_ip;
$tmp_user_ip = str_replace(":" , "_" ,$tmp_u_ip);
echo $tmp_user_ip."<br>";;

// Return current date from the remote server
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
echo $date."<br>";;
$date_new = str_replace(":" , "-" ,$date);
$time = $tmp_user_ip . "_" .substr(str_replace(" " , "_" ,$date_new),0,14);
echo $time."<br>";


?>