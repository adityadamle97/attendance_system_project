<?php
session_start();
$d=$_POST['d'];
echo"Today's date is ".$d."<br>";
$class=$_SESSION['c'];
$sub=$_SESSION['s'];
echo "Class is ".$class."<br>"." and subject is ".$sub."<br>";
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$p=$_SESSION['array1'];
$q=$_SESSION['array2'];
$r=$_SESSION['array3'];
$a=$_POST['attendance'];
for($i=0;$i<count($p);$i++)
{
	$x=$p[$i];
	$sql="insert into attendance(roll_no,a_date,c_id,s_id) values($x,'$d','$class','$sub')";
	$result=$db->query($sql);
	/*if($result===TRUE)
	echo "Inserted roll no and date"."<br>";
	else
	echo "Error";*/
}
for($j=0;$j<count($q);$j++)
{
	$y=$q[$j];
	$sql2="update attendance set std_name='$y' where roll_no=$p[$j] and a_date='$d'";
	$result=$db->query($sql2);
	/*if($result===TRUE)
	echo "Updated name"."<br>";
	else
	echo "Error";*/
}
for($k=1;$k<=count($a);$k++)
{
	$z=$a[$k];
	$b=$p[$k-1];
	$sql3="update attendance set presenty='$z' where roll_no=$b and a_date='$d'";
	$result=$db->query($sql3);
	/*if($result===TRUE)
	echo "Updated presenty"."<br>";
	else
	echo "Error";*/
}
echo "Attendance has been marked!"."<br><br>";
 $sql6="select * from attendance where a_date='$d'";
 echo "ATTENDANCE FOR TODAY";
    $result6=$db->query($sql6);
if ($result6->num_rows > 0) {
    echo "<table border='2'><tr><th>Roll no</th><th>Student name</th><th>cPresenty</th><th>Subject no</th><th>Class no</th><th>Date</th></tr>";
    while($row6= $result6->fetch_assoc()) {
        echo "<tr><td>".$row6["roll_no"]."</td><td>".$row6["std_name"]."</td><td>".$row6["presenty"]."</td><td>".$row6["s_id"]."</td><td>".$row6["c_id"]."</td><td>".$row6["a_date"]."</td></tr>";
    }
    }
    else
    echo "No results found"."<br><br>";
    echo "<a href='report.php'>See report</a><br>";
    session_destroy();
    echo "You have been automatically logged out. Wish to <a href='/adfire/main/bs-education/login/login.php'>Log in</a> again?<br>";
?>
