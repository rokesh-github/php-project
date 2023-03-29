<?php

$food = array(
    'healthy' => array('pasta', 'vegetables', 'salad'),
    'unhealthy' => array('pizza', 'icecream')
);
foreach($food as $element => $inner_array) {
echo  $element.'<br>';
foreach($inner_array as $items) {
    echo $items.'<br>';

}
}
?>