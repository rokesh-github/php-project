<?php
$filerename = 'filetorename.txt';
$rand = rand(10000, 99999);
if (rename($filerename, $rand . '.txt')) {
    echo 'file' . $filerename . ' has been renamed to ' . $rand;
} else {
    echo 'Error Renaming.';
}
