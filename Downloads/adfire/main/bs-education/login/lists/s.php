<?php
$class=$_POST['c'];
$subject=$_POST['s'];
$db=new mysqli("localhost","root","","attendance_sys");
echo $class."<br>";
echo $subject;
/*if($db->connect_error)
echo "fail";
$sql="select stu_rno,stu_name,student.c_id from student where c_id in(select distinct t_cl_sub.c_id from teacher,student,class,subject,t_cl_sub where teacher.t_id=t_cl_sub.t_id and class.c_id=t_cl_sub.c_id and subject.s_id=t_cl_sub.s_id and t_usn='sud_ch19' and t_pass='sudhirchavhan' and c_name='$subject' and s_name='$subject');"*/
?>
