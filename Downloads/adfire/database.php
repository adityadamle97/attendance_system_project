<?php
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
else
echo "connected"."<br>";
$sql="select * from department";
$result=$db->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["d_id"]."</td><td>".$row["d_name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$db->close();
?>
