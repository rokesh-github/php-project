<?php
$db = mysqli_connect('localhost','root','','vegetables');
function db_obj(){
    global $db;
    return $db;
}
    if(mysqli_connect_errno()) {
        die('connection failed:'.mysqli_connect_errno());
    } else {
        echo 'connected succesfully!';
    }
   
    ?>