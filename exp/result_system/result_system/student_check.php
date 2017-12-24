<?php
$fnam=$_POST['fnam'];
$fnamu=strtoupper($fnam);
$fnaml=strtolower($fnam);
$mnam=$_POST['mnam'];
$mnamu=strtoupper($mnam);
$mnaml=strtolower($mnam);
$lnam=$_POST['lnam'];
$lnamu=strtoupper($lnam);
$lnaml=strtolower($lnam);
$funam=$_POST['funam'];
$funamu=strtoupper($funam);
$funaml=strtolower($funam);
$fanam=$_POST['fanam'];
$fanamu=strtoupper($fanam);
$fanaml=strtolower($fanam);
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$dobf=date("d-m-Y", strtotime($dob));
$course=$_POST['co'];
$admin_year=$_POST['ye'];
$roll=$_POST['roll'];
$mob=$_POST['mo'];
$email=$_POST['em'];
$emaill=strtolower($email);
$pass=$_POST['pwd'];
$uid=$_POST['userid'];
$uidl=strtolower($uid);
$uidu=strtoupper($uid);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$secqu=strtoupper($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
$secau=strtoupper($seca);
echo "First Name:".$fnamu."<br>";
echo "Middle Name:".$mnamu."<br>";
echo "Last Name:".$lnamu."<br>";
echo "Full Name:".$funamu."<br>";
echo "Father Name:".$fanamu."<br>";
echo "Gender:".$gen."<br>";
echo "Date of Birth:".$dobf."<br>";
echo "Course:".$course."<br>";
echo "Administion Year:".$admin_year."<br>";
echo "Roll No:".$roll."<br>";
echo "Mobile No:".$mob."<br>";
echo "Email Id:".$emaill."<br>";
echo "Password:".$pass."<br>";
echo "User Id:".$uidu."<br>";
echo "Security Question:".$secqu."<br>";
echo "Security Answer:".$secau."<br>";
echo "<br><br>";
$u_type="student";
$status="deactive";
include('db_conn.php');
mysql_query("insert into users_details (user_id,password,security_ques,security_ans,user_type,status) values('$uidl','$pass','$secql','$secal','$u_type','$status')")or die("error in std_bca");
$res=mysql_query("insert into student_details (student_id,f_name,m_name,l_name,full_name,father_name,gender,mob_no,email_id,admin_year,roll_no,course,dob) values('$uidl','$fnaml','$mnaml','$lnaml','$funaml','$fanaml','$gen','$mob','$emaill','$admin_year','$roll','$course','$dob')");

if(!$res)
{
	echo "error in query";
}
else
{
	echo "Your Form Submited Sucessfully";	
}	
?>