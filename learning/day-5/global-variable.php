<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
function echo_ip() {
    global $user_ip;
    $string = ' Your Ip address is:'.$user_ip;
    echo $string;
}
echo_ip()
// Your Ip address is:::1
?>  
