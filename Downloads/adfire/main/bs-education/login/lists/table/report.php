<?php
$a=array();
$i=0;
$db=new mysqli("localhost","root","","attendance_sys");
/*if($db->connect_error)
echo "fail";*/
$sql1="select distinct roll_no from attendance";
$result1=$db->query($sql1);
if($result1->num_rows > 0)
{
	 while($row = $result1->fetch_assoc())
	{
	$a[$i++]=$row["roll_no"];
	}
}
echo "<table border=2><tr><th>ROLL NO</th><th>PERCENTAGE</th><tr>";
echo "<tr>";
for($i=0;$i<count($a);$i++)
{
	
	$sql2="select count(presenty) from attendance where roll_no=$a[$i]";
	$result2=$db->query($sql2);
	$data=$result2->fetch_row();
	$sql3="select count(presenty) from attendance where roll_no=$a[$i] and presenty='P'";
	$result3=$db->query($sql3);
	$data2=$result3->fetch_row();
	$per=(100*$data2[0]/$data[0]);
	echo "<tr><td>".$a[$i]."</td>"."<td>".$per."%"."</td></tr>";
}
echo "</tr>";
echo "</table>";
/*echo "<a href='localhost/adfire/main/bs-education/main.php'>Finish</a>"*/
?>
