<?php
echo $name = $_FILES['file']['name'];
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" /><br><br>
    <input type="submit" value="submit" />
</form>
