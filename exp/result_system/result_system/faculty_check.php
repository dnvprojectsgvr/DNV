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
$mob=$_POST['mo'];
$email=$_POST['em'];
$emaill=strtolower($email);
$pass=$_POST['pwd'];
$fci=$_POST['facultyid'];
$fcil=strtolower($fci);
$fciu=strtoupper($fci);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$secqu=strtoupper($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
$secau=strtoupper($seca);
$u_type="faculty";
$status="deactive";
include('db_conn.php');
$result = mysql_query("SELECT facultyid FROM faculty_reg WHERE facultyid  = '$fcil'")or die("error in query");
$row=mysql_fetch_array($result);
if($row[0]==$fcil)
{
	echo "facultyid is already exits";
}
else
{
echo "First Name:".$fnamu."<br>";
echo "Middle Name:".$mnamu."<br>";
echo "Last Name:".$lnamu."<br>";
echo "Full Name:".$funamu."<br>";
echo "Father Name:".$fanamu."<br>";
echo "Gender:".$gen."<br>";
echo "Date of Birth:".$dobf."<br>";
echo "Mobile No:".$mob."<br>";
echo "Email Id:".$emaill."<br>";
echo "Faculty Id:".$fciu."<br>";
echo "Password:".$pass."<br>";
echo "Security Question:".$secqu."<br>";
echo "Security Answer:".$secau."<br>";
echo "<br><br>";

include('db_conn.php');
mysql_query("insert into users_details (user_id,password,security_ques,security_ans,user_type,status) values('$fcil','$pass','$secql','$secal','$u_type','$status')")or die("error in facultyid");

$res=mysql_query("insert into faculty_details (faculty_id,f_name,m_name,l_name,full_name,father_name,gender,mob_no,email_id,dob) values('$uidl','$fnaml','$mnaml','$lnaml','$funaml','$fanaml','$gen','$mob','$emaill','$dob')");


if(!$res)
{
	echo "error in query";
}
else
{
	echo "Your Form Submited Sucessfully";	
}
}
//(first_name,middle_name,last_name,full_name,father_name,gender,dob,qualification,joining_year,mobile_no,email_id,faculty_id,password,security_ques,security_ans)  
?>
<html>
<head>
<title>faculty_check</title>
</head>
<body>
<br>
<a href="faculty_upd.php?facultyid=<?php echo $fcil; ?>"><button>Update</button></a>
<a href="index.php"><button>Login</button></a>
</body>
</html>