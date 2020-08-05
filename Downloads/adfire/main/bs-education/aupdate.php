<?php
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
else
echo "Successfully connected to attendance database <br>";
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
$rnew=$_POST['rollnew'];
$nm=$_POST['nm'];
$add=$_POST['address'];
$c=$_POST['contact'];
$sql="update teacher set t_name='$nm',t_address='$add',t_contact=$c where t_id=$rnew";
$result=$db->query($sql);
if($result===TRUE)
echo "Profile updated successfully";
else
echo "Updation unsuccessful.Please try again<br>";;
$sql2="select * from teacher";
$result1=$db->query($sql2);
if ($result1->num_rows > 0) {
    echo "<table border='2'><tr><th>ID</th><th>Name</th><th>Address</th><th>Contact</th><th>Username</th><th>Password</th></tr>";
    while($row1= $result1->fetch_assoc()) {
        echo "<tr><td>".$row1["t_id"]."</td><td>".$row1["t_name"]."</td><td>".$row1["t_address"]."</td><td>".$row1["t_contact"]."</td><td>".$row1["t_usn"]."</td><td>".$row1["t_pass"]."</td></tr>";
    }
    }
 }
?>
<html>
<head>
<script type="text/javscript">
function checkForm(form)
{
	if(form.rollnew.value == "")
	{
		alert("ID cannot be blank!");
		form.rollnew.focus();
		return false;
	}
	if(form.nm.value == "")
	{
		alert("Name cannot be blank!");
		form.nm.focus();
		return false;
	}
	if(form.address.value == "")
	{
		alert("Address cannot be blank!");
		form.address.focus();
		return false;
	}
	if(form.contact.value == "")
	{
		alert("Contact cannot be blank!");
		form.contact.focus();
		return false;
	}
	return true;
}
</script>
<title>Update teacher information</title>
</head>
<body bgcolor="yellow">
<h2>Information to be updated</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return checkForm(this);">
Teacher ID<input type="text" name="rollnew"><br>
Teacher name<input type="text" name="nm"><br>
Address<input type="text" name="address"><br>
Contact<input type="text" name="contact"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
