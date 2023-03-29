<?php
$user_ip = $_SERVER ['REMOTE_ADDR'];
function echo_ip(){
    global $user_ip;
    $string = 'your ip address is.'.$user_ip;
    echo $string;
}
echo_ip();
?>