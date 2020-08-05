<!DOCTYPE html>
<?php
session_start();
$_SESSION['usn']=$_REQUEST['user'];
$_SESSION['pass']=$_REQUEST['pass'];
$u=$_SESSION['usn'];
$p=$_SESSION['pass'];
$db=new mysqli("localhost","root","","attendance_sys");
if($db->connect_error)
echo "fail";
$sql3="select * from teacher where t_usn='$u' and t_pass='$p'";
 $result3=$db->query($sql3);
 $num=$result3->num_rows;
 if($num==0)
 {
 	die("Perhaps you have not signed up or entered the wrong <a href='/adfire/main/bs-education/login/login.php'>Sign in</a> information.Please click the link below to"."<br>"."<a href='/adfire/main/bs-education/login/signup.php'>"."Sign Up"."</a>");
 }
 $sql="select DISTINCT c_name from class,teacher,t_cl_sub where teacher.t_id=t_cl_sub.t_id and class.c_id=t_cl_sub.c_id and t_usn='$u'and t_pass='$p'";
$sql2="select distinct s_name from subject,teacher,t_cl_sub where teacher.t_id=t_cl_sub.t_id and subject.s_id=t_cl_sub.s_id and t_usn='$u' and t_pass='$p' order by s_name";
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Class menu</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat''>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form method="post" action="table/sheet2.php">
  <h2>Please select class and subject to continue</h2>
<ul class="accordion-menu">
    <div class="dropdownlink"><i class="fa fa-comments-o" aria-hidden="true"></i>Class
    <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <select class="submenuItems" name="c">
    <?
    $result=$db->query($sql);
    if($result->num_rows>0)
	{
    while($row = $result->fetch_assoc()) 
      echo "<option>".$row["c_name"]."</option>";
      }
      ?>
    </select>
  </ul>
  <ul class="accordion-menu"> 
    <div class="dropdownlink"><i class="fa fa-book" aria-hidden="true"></i> Subject
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
      </div>
      <select class="submenuItems" name="s">
       <?$result2=$db->query($sql2);
       if($result->num_rows>0)
	{
    while($row = $result2->fetch_assoc())
      echo "<option>".$row["s_name"]."</option>";
      }
      ?>
  </select>
  </ul>
<br>
<center><input type="submit" value="Submit"></center>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>
</form>
</body>
</html>
