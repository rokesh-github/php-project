<?php
function add($number_1,$number_2){
    $result = $number_1 + $number_2;
    return $result;
}
function divide($number_1,$number_2){
    $result = $number_1 / $number_2;
    return $result;
}
$sum = divide(add(10,10),add(10,10));
echo $sum;
?>