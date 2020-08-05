<!DOCTYPE html>
<html lang="en">
<head>
 <title>Attendance Sheet</title>
	<meta charset="utf-8">
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
 <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
</head>
<body>
	
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
								Presenty
							</div>
						</div>
						<?php
						session_start();
						$x=array();
						$i=$j=$k=0;
						$a=array();
						$db=new mysqli("localhost","root","","attendance_sys");
						if($db->connect_error)
						echo "fail";
						$b=array();
						$w=array();
						/*if (isset($_POST["submit"]))
						{
						array_push($x,$_POST['u']);
						print_r($x);
						}
						$_SESSION['array4']=$x;*/
$t=$_SESSION['usn'];
$p=$_SESSION['pass'];
$_SESSION['c']=$_POST['c'];
$_SESSION['s']=$_POST['s'];
$cl=$_SESSION['c'];
$su=$_SESSION['s'];
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql="select stu_rno,stu_name from student where c_id in(select distinct t_cl_sub.c_id from teacher,student,class,subject,t_cl_sub where teacher.t_id=t_cl_sub.t_id and class.c_id=t_cl_sub.c_id and subject.s_id=t_cl_sub.s_id and t_usn='$t' and t_pass='$p' and c_name='$cl' and s_name='$su')";
						$result=$db->query($sql);
						if($result->num_rows>0)
						{
						 while($row = $result->fetch_assoc())
						 {
						 $a[$i++]=$row["stu_rno"];
						 $b[$j++]=$row["stu_name"];
						 /*$sql2="insert into attendance(roll_no,std_name,c_id,s_id) values($a[$i],'$b[$j]','$c','$s')";
					         $result2=$db->query($sql2);
					         if($result===TRUE)
					         echo "Inserted";
					         else
					         echo "Error";*/
						echo "<div class='row'>";
							echo"<div class='cell' data-title='Roll no'>";
								echo $row["stu_rno"];
							echo "</div>";
							echo "<div class='cell' data-title='Name'>";
								echo $row["stu_name"];
							echo "</div>";
						       echo "<div class='cell' data-title='Status'>";
								echo "<form method='post' action='submit.php'>";
								echo "<input type='radio' name='attendance[$i]' value='P'>"."P";
								echo "<input type='radio' name='attendance[$i]' value='A'>"."A";
							echo "</div>";
   							echo "</div>";
						}
						}
						else die("Looks like you don't teach $su to $cl. Please go back and try again or contact admin.");
						$_SESSION['array1']=$a;
						$_SESSION['array2']=$b;
						$_SESSION['array3']=$w;
						?>
					</div>
			</div>
		
		Date: <input type="text" id="datepicker" name="d">
		</div>
</div>

<br>	
<center><input type="submit"><center>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<form>
</body>
</html>
