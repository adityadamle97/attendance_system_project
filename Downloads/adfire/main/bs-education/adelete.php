<?php
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
else
echo "Connected successfully to attendance database"."<br>"."<br>";
$sql="select * from teacher";
$result1=$db->query($sql);
if ($result1->num_rows > 0) {
    echo "<table border='2'><tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>Username</th><th>Password</th></tr>";
    while($row1= $result1->fetch_assoc()) {
        echo "<tr><td>".$row1["t_id"]."</td><td>".$row1["t_name"]."</td><td>".$row1["t_address"]."</td><td>".$row1["t_contact"]."</td><td>".$row1["t_usn"]."</td><td>".$row1["t_pass"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    if(isset($_POST['submit']))
    {
    	$d=$_POST['r'];
    	echo $d."<br>";
    	$sql3="delete from t_cl_sub where t_id=$d";
    	$sql2="delete from teacher where t_id=$d";
    	$result3=$db->query($sql3);
    	$result2=$db->query($sql2);
    	if($result2===TRUE && $result3===TRUE)
    	echo "Deleted profile successfully";
    	else
    	echo "Could not delete";
    	$result1=$db->query($sql);
if ($result1->num_rows > 0) {
    echo "<table border='2'><tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>Username</th><th>Password</th></tr>";
    while($row1= $result1->fetch_assoc()) {
        echo "<tr><td>".$row1["t_id"]."</td><td>".$row1["t_name"]."</td><td>".$row1["t_address"]."</td><td>".$row1["t_contact"]."</td><td>".$row1["t_usn"]."</td><td>".$row1["t_pass"]."</td></tr>";
    }
    }
    echo "</table>";
    echo "<br>"."<br>";
    	}
?>
<html>
<title>Delete teacher profile</title>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<body bgcolor="orange">
Enter teacher ID whose profile you want to delete<input type="text" name="r"><br>
<input type="submit" name="submit">
</body>
</html>


