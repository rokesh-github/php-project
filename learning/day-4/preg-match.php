<?php
function has_space($string)
{
    if (preg_match('/ /', $string)) {
        return true;
    } else {
        return false;
    }
}
$string = 'weareusingpregmatch.';
if (has_space($string)) {
    echo 'it has a space';
} else {
    echo 'it has no space';
}
?>
