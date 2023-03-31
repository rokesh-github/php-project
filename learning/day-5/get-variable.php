<?php
//https://www.php.net/manual/en/function.gettype.php
if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
    $day = $_GET['day'];
    $date = $_GET['date'];
    $year = $_GET['year'];
    if (!empty($day) && !empty($date) && !empty($year)) {
        echo 'It is ' . $day . ' ' . $date . ' ' . $year;
    } else {
        echo 'Fill in all field.';
    }
}
?>
<form action="get-variable.php" method="GET">
    <label>Day:</label><br>
    <input type="text" name="day" /><br>
    <label>Date:</label><br>
    <input type="text" name="date" /><br>
    <label>year:</label><br>
    <input type="text" name="year" /><br>
    <input type="submit" value="submit">
</form>