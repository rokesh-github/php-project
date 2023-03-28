<?php
$number = 1;

$upper = 100;
$lower = 20;
if ($number >= $lower && $number <= $upper) {
    echo 'ok!';
} else {
    echo 'the number must between ' . $lower . ' and ' . $upper;
}
?>
