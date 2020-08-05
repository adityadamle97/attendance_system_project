<?php
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql="select * from student";
$result=$db->query($sql);
$row = $result->fetch_assoc();
for($i=0;$i<count($row);$i++)
echo $row[$i];
?>
