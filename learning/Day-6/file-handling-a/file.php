<?php
if (isset($_POST['name'])){
    $name = $_POST['name'];
    if (!empty($name)) {
        $handle = fopen('names.txt', 'a');
        fwrite($handle, $name."\n");
    } else {
        echo 'please type a name.';
    }
    }
?>
<form action="file.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name"><br><br>
    <input type="submit" value="submit">
</form>