<?php ob_start(); ?>
<h1>This is my page</h1>
My page.

<?php
$redirect_page = 'http://www.google.com/';
$redirect = false;
if ($redirect == true) {
    header('location:' . $redirect_page);
};
?>