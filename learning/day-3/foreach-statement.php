<?php

$food = array(
    'healthy' => array('pasta', 'vegetables', 'salad'),
    'unhealthy' => array('pizza', 'icecream')
);
foreach ($food as $key => $inner_array) {
    echo  $key . '<br>';
    foreach ($inner_array as $items) {
        echo $items . '<br>';
    }
}
?>
