<?php
session_start();
$_SESSION['usn']=$_POST['s'];
print_r($_SESSION);
?>
<html>
<form method="post" action="s3.php">
<input type="submit" value="submit">
</form></html>
