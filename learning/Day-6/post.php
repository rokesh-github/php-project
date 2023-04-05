<?php
//https://www.php.net/manual/en/reserved.variables.post.php
$match = 'pass123';
if (isset($_POST['password'])) {
   $password = $_POST['password'];
   if ($password == $match) {
      echo 'that is correct!';
   } else {
      echo 'that is incorrect!';
   }
}
//this is incomplete!
?>
<form action="post.php" method="POST">
   <label>Password:</label>
   <input type="password" name="password" /><br>
   <input type="submit" value="submit" />
</form>