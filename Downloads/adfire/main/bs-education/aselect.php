<?php
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
else
echo "Connected successfully to attendance database"."<br>"."<br>";
$sql="select * from teacher";
$sql2="select * from student";
$sql3="select * from class";
$sql4="select * from subject";
$sql5="select * from department";
$sql6="select * from attendance";
$sql7="select * from t_cl_sub";
echo "TEACHER TABLE"."<br>";
$result1=$db->query($sql);
if ($result1->num_rows > 0) {
    echo "<table border='2'><tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>Username</th></tr>";
    while($row1= $result1->fetch_assoc()) {
        echo "<tr><td>".$row1["t_id"]."</td><td>".$row1["t_name"]."</td><td>".$row1["t_address"]."</td><td>".$row1["t_contact"]."</td><td>".$row1["t_usn"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    echo "STUDENT TABLE";
    $result2=$db->query($sql2);
if ($result2->num_rows > 0) {
    echo "<table border='2'><tr><th>Roll no</th><th>Class</th><th>Name</th><th>Address</th><th>Contact</th></tr>";
    while($row2= $result2->fetch_assoc()) {
        echo "<tr><td>".$row2["stu_rno"]."</td><td>".$row2["c_id"]."</td><td>".$row2["stu_name"]."</td><td>".$row2["stu_address"]."</td><td>".$row2["stu_contact"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    echo "DEPARTMENT TABLE";
$result5=$db->query($sql5);
if ($result5->num_rows > 0) {
    echo "<table border='2'><tr><th>ID</th><th>Name</th></tr>";
    while($row5= $result5->fetch_assoc()) {
        echo "<tr><td>".$row5["d_id"]."</td><td>".$row5["d_name"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
  echo "CLASS TABLE";
    $result3=$db->query($sql3);
if ($result3->num_rows > 0) {
    echo "<table border='2'><tr><th>Class no</th><th>Dept no</th><th>class name</th></tr>";
    while($row3= $result3->fetch_assoc()) {
        echo "<tr><td>".$row3["c_id"]."</td><td>".$row3["d_id"]."</td><td>".$row3["c_name"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    echo "SUBJECT TABLE";
    $result4=$db->query($sql4);
if ($result4->num_rows > 0) {
    echo "<table border='2'><tr><th>Subject no</th><th>Class no</th><th>Subject name</th></tr>";
    while($row4= $result4->fetch_assoc()) {
        echo "<tr><td>".$row4["s_id"]."</td><td>".$row4["c_id"]."</td><td>".$row4["s_name"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    echo "ATTENDANCE TABLE";
    $result6=$db->query($sql6);
if ($result6->num_rows > 0) {
    echo "<table border='2'><tr><th>Roll no</th><th>Student name</th><th>cPresenty</th><th>Subject no</th><th>Class no</th><th>Date</th></tr>";
    while($row6= $result6->fetch_assoc()) {
        echo "<tr><td>".$row6["roll_no"]."</td><td>".$row6["std_name"]."</td><td>".$row6["presenty"]."</td><td>".$row6["s_id"]."</td><td>".$row6["c_id"]."</td><td>".$row6["a_date"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    echo "MASTER TABLE";
    $result7=$db->query($sql7);
if ($result7->num_rows > 0) {
    echo "<table border='2'><tr><th>Teacher no</th><th>Class no</th><th>Subject no</th><th>Dept no</th></tr>";
    while($row7= $result7->fetch_assoc()) {
        echo "<tr><td>".$row7["t_id"]."</td><td>".$row7["c_id"]."</td><td>".$row7["s_id"]."</td><td>".$row7["d_id"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
?>

