<?php
//https://www.php.net/manual/en/function.htmlentities.php
if (isset($_GET['day'])) {
    $day = htmlentities($_GET['day']);
    if (!empty($day)) {
        echo 'It is ' . $day;
    } else {
        echo 'Fill in the field.';
    }
}
?>
<form action="html-entities.php" method="GET">
    <label>Day:</label><br>
    <input type="text" name="day" /><br>
    <input type="submit" value="submit" />
</form>
<!-- It is <iframe src="pagehere"></iframe> -->