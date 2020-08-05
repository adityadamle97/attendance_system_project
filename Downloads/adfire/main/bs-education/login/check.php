<?php
$usn=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql="select * from teacher where t_usn='$usn' and t_pass='$pass'";
$result=$db->query($sql);
if ($result->num_rows > 0)
echo "Welcome to Attend! You may proceed"."<br>";
else
die("Oops! Perhaps you have not signed up yet. Please go back and select the sign up option. If this is not the case, please email to us in the Contacts section");	
?>
<html>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

<a href="lists/dropdown.php"><input type="button" value="Proceed"></a>
</html>
