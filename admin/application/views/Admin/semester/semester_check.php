<?php
include('db_conn.php');
if(isset($_POST['couname']))
{
$couname = $_POST['couname'];
$semname=$_POST['semname'];
$sql = mysql_query("SELECT * FROM  `semester_details` sd
INNER JOIN `course_details` cod ON cod.id=sd.course_id and cod.id='$couname'");
$row=mysql_fetch_array($sql);
$cono=mysql_num_rows($sql);
$course_name=$row['course_name'];
// $semester_name=$row['semester_name'];
if($course_name='MSCIT' or $course_name='mscit')
{
	// if($cono>=4 and $semester_name='Semester 1' or $semester_name='Semester 2' or $semester_name='Semester 3' or $semester_name='Semester 4')
	if($cono>=4)
	{
echo 'Already done';
	}
	else
	{
echo 'OK';
	}
}
elseif($course_name='BCA' or $course_name='bca')
{
	// if($cono>=6 and $semester_name='Semester 1' or $semester_name='Semester 2' or $semester_name='Semester 3' or $semester_name='Semester 4' or $semester_name='Semester 5' or $semester_name='Semester 6')
	if($cono>=6)
	{
echo 'Already done';
	}	
	else
	{
echo 'OK';
	}
}
elseif($course_name='BBA' or $course_name='bba')
{
	// if($cono>=6 and $semester_name='Semester 1' or $semester_name='Semester 2' or $semester_name='Semester 3' or $semester_name='Semester 4' or $semester_name='Semester 5' or $semester_name='Semester 5' or $semester_name='Semester 6')
	if($cono>=6)
	{
echo 'Already done';
	}	
	else
	{
echo 'OK';
	}
}
}
?>