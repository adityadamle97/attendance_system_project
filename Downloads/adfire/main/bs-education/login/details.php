<?php
session_start();
$_SESSION['r']=$_POST['roll'];
$_SESSION['dept']=$_POST['dept'];
$d=$_SESSION['dept'];
$ro=$_SESSION['r'];
echo $_SESSION['r']."<br>";
$n=$_POST['fname'];
$a=$_POST['addr'];
$c=$_POST['contact'];
$u=$_POST['usn'];
$p=$_POST['pass'];
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql2="select * from department where d_name='$d'";
$result2=$db->query($sql2);
$nu=$result2->num_rows;
if($nu==0)
{
die("You have not entered a valid department.Please <a href='signup.php'>try again!</a>");
}
$sql="insert into teacher(t_id,t_name,t_address,t_contact,t_usn,t_pass)values($ro,'$n','$a',$c,'$u','$p')";
$result=$db->query($sql);
if($result===TRUE)
{
echo "Signed up successfully. Please click below to set up your teaching profile";
echo "<html>
<form method='post' action='signup2.php'>
<input type='submit' value='Click'>
</form>";
}
else
echo "Failure.Please <a href='signup.php'>try again!</a>";
?>
</html>
