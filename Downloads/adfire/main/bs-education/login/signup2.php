<?php
session_start();
$rno=$_SESSION['r'];
$dept=$_SESSION['dept'];
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql="select d_id from department where d_name='$dept'";
$result=$db->query($sql);
while($row = $result->fetch_assoc())
{
	$a=$row["d_id"];
} 
echo "Welcome to the final step of setting up your account. Your teacher ID is ".$rno." and department is ".$dept."<br>";
if(isset($_POST['submit']))
{
if(isset($_POST['fy']))
{
$s1=$_POST['fy'];
for($i=0;$i<count($s1);$i++)
{
	$sql2="select s_id from subject where s_name='$s1[$i]'";
	$result2=$db->query($sql2);
	while($row2=$result2->fetch_assoc())
		$b=$row2["s_id"];
	$sql3="insert into t_cl_sub(t_id,c_id,s_id,d_id)values($rno,'1',$b,$a)";
	$result3=$db->query($sql3);
	if($result3===TRUE)
	echo "You teach $s1[$i] with ID $b!"."<br>";
	else
	echo "Error"."<br>";
}
}
if(isset($_POST['sy']))
{
$s2=$_POST['sy'];
for($i=0;$i<count($s2);$i++)
{
	$sql4="select s_id from subject where s_name='$s2[$i]'";
	$result4=$db->query($sql4);
	while($row3=$result4->fetch_assoc())
		$b=$row3["s_id"];
	$sql5="insert into t_cl_sub(t_id,c_id,s_id,d_id)values($rno,'2',$b,$a)";
	$result5=$db->query($sql5);
	if($result5===TRUE)
	echo "You teach $s2[$i] with ID $b!"."<br>";
	else
	echo "Error"."<br>";
}
}
if(isset($_POST['ty']))
{
$s3=$_POST['ty'];
for($i=0;$i<count($s3);$i++)
{
	$sql5="select s_id from subject where s_name='$s3[$i]'";
	$result5=$db->query($sql5);
	while($row4=$result5->fetch_assoc())
		$b=$row4["s_id"];
	$sql6="insert into t_cl_sub(t_id,c_id,s_id,d_id)values($rno,'3',$b,$a)";
	$result6=$db->query($sql6);
	if($result6===TRUE)
	echo "You teach $s3[$i] with ID $b!"."<br>";
	else
	echo "Error"."<br>";
}
}
echo "Your account is ready, You can <a href='login.php'>log in</a>now!"."<br>";
}
?>
<html>
<title>Teaching Profile</title>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<font size="3" face="helvetica" color="green">Please select the subjects which you are currently teaching</font>
<h3>FY SUBJECTS</h3>
CS1<input type="checkbox" name="fy[]" value="FYCS1">
CS2<input type="checkbox" name="fy[]" value="FYCS2">
M1<input type="checkbox" name="fy[]" value="FYM1">
M2<input type="checkbox" name="fy[]" value="FYM2">
E1<input type="checkbox" name="fy[]" value="FYE1">
E2<input type="checkbox" name="fy[]" value="FYE2">
S1<input type="checkbox" name="fy[]" value="FYS1">
S2<input type="checkbox" name="fy[]" value="FYS2"><br><br>
<h3>SY SUBJECTS</h3>
CS1<input type="checkbox" name="sy[]" value="SYCS1">
CS2<input type="checkbox" name="sy[]" value="SYCS2">
M1<input type="checkbox" name="sy[]" value="SYM1">
M2<input type="checkbox" name="sy[]" value="SYM2">
E1<input type="checkbox" name="sy[]" value="SYE1">
E2<input type="checkbox" name="sy[]" value="SYE2">
English<input type="checkbox" name="sy[]" value="English">
<h3>TY SUBJECTS</h3>
CS1<input type="checkbox" name="ty[]" value="CS1">
CS2<input type="checkbox" name="ty[]" value="CS2">
CS3<input type="checkbox" name="ty[]" value="CS3">
CS4<input type="checkbox" name="ty[]" value="CS4">
CS5<input type="checkbox" name="ty[]" value="CS5">
CS6<input type="checkbox" name="ty[]" value="CS6">
<input type="submit" name="submit" value="Submit">
</html>
