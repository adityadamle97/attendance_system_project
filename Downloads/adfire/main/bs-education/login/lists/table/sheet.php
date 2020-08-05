<!DOCTYPE html>
<html lang="en">
<head>
	<title>Attendance Sheet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<form method="post" action="submit.php">
<body>
	
	<div class="limiter">
	<?php
session_start();
$t=$_SESSION['usn'];
$p=$_SESSION['pass'];
$c=$_POST['c'];
$s=$_POST['s'];
echo "USERNAME: ".$t."<br> "."PASSWORD: ".$p."<br>";
echo "CLASS: ".$c."<br>"."SUBJECT: ".$s."<br>";
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql="select stu_rno,stu_name,student.c_id from student where c_id in(select distinct t_cl_sub.c_id from teacher,student,class,subject,t_cl_sub where teacher.t_id=t_cl_sub.t_id and class.c_id=t_cl_sub.c_id and subject.s_id=t_cl_sub.s_id and t_usn='$t' and t_pass='$p' and c_name='$c' and s_name='$s')";
?>
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Roll no
							</div>
							<div class="cell">
								Name
							</div>
							<div class="cell">
								Class
							</div>
							<div class="cell">
								Status
							</div>
							<div class="cell">
								Submit
							</div>
						</div>
						<?php
						$result=$db->query($sql);
						$i=$j=$k=$l=0;
						$a=array();
						$b=array();
						$w=array();
						$x=array();
						if($result->num_rows>0)
						{
						 while($row = $result->fetch_assoc())
						 {
						 $a[$i++]=$row["stu_rno"];
						 $b[$j++]=$row["stu_name"];
						 $w[$k++]=$row["c_id"];
						echo "<div class='row'>";
							echo"<div class='cell' data-title='Roll no'>";
								echo $row["stu_rno"];
							echo "</div>";
							echo "<div class='cell' data-title='Name'>";
								echo $row["stu_name"];
							echo "</div>";
							echo "<div class='cell' data-title='Class'>";
								echo $row["c_id"];
							echo "</div>";
							echo "<div class='cell' data-title='Status'>";

   							echo "</div>";
   							echo "</div>";
						}
						}
						$_SESSION['array1']=$a;
						$_SESSION['array2']=$b;
						$_SESSION['array3']=$w;
						$_SESSION['array4']=$x;
						?>
					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</form>
</body>
</html>
