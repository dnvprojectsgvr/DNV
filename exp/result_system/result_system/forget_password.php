<!doctype html>
<html>
<head>
<title>Forget Password</title>
<script src="forget_password.js"></script>
</head>
<body>
<form name="p" method="post">
<div><label for="userid">USERID&nbsp;</label><input type="text" name="userid" onBlur="logu()" onKeyPress="return event.charCode > 64  && event.charCode < 91 || event.charCode > 96 && event.charCode < 123 || event.charCode >= 48 && event.charCode <= 57 || event.charCode == 8" required><span id="uierr"></span></div>
<div><label for="secr">Security Question&nbsp;</label><select name="secr" onBlur="sec()">
	<option selected="" value="Default">Select Security Question</option>
	<option value="favourite teacher">What Is Your Favourite Teacher Name&#63;</option>
	<option value="mother name">What Is Your Mother Name&#63;</option>
	<option value="childhood friend">What Is Your Childhood Friend Name&#63;</option>
	<option value="favourite food">What Is Your Favourite Food&#63;</option></select><span id="secerr"></span></div>
<div><label for="seca">Security Answer</label><input type="text" name="seca" placeholder="eg:-ram" onKeyPress="return event.charCode > 64  && event.charCode < 91 || event.charCode > 96 && event.charCode < 123 || event.charCode == 8" onBlur="secan()" required><span id="secaerr"></span></div>
<div><label for="pwd">Password&nbsp;</label><input type="password" name="pwd" placeholder="eg:-ram@47863" onBlur="pass()" required><span id="pwderr"></span></div>
<div><label for="pwde">Cofirm Password&nbsp;</label><input type="password" name="pwde" placeholder="eg:-ram@47863" onBlur="pass()" required><span id="pwdeerr"></span></div>
<div>User Type&nbsp;<select name="utype">
		<option selected value="student">Student</option>
		<option value="faculty">Faculty</option>
		<option value="admin">Admin</option>
	</select></div>
<div><input type="submit" value="Submit">&nbsp;<input type="reset" value="Reset"></div>
</form>
</body>
</html>
<?php
if($_POST)
{
$uid=$_POST['userid'];
$uidl=strtolower($uid);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
$pass=$_POST['pwd'];
$ustype=$_POST['utype'];
include('db_conn.php');
if($ustype=="student")
{
$result = mysql_query("SELECT userid,security_ques,security_ans FROM std_reg WHERE userid  = '$uidl'")or die("error in query");
$row=mysql_fetch_array($result);
if(($row[0]==$uidl) && ($row[1]==$secql) && ($row[2]==$secal))
{
	$respass = mysql_query("update std_reg set password='$pass' where userid='$uidl'")or die("error in password query");
	echo "Changed Password";
	header("Location:index.php");
}
else
{
	echo "Wrong Details";
}
}
if($ustype=="faculty")
{
$result = mysql_query("SELECT facultyid,security_ques,security_ans FROM faculty_reg WHERE facultyid  = '$uidl'")or die("error in query");
$row=mysql_fetch_array($result);
if(($row[0]==$uidl) && ($row[1]==$secql) && ($row[2]==$secal))
{
	$respass = mysql_query("update faculty_reg set password='$pass' where facultyid='$uidl'")or die("error in password query");
	echo "Changed Password";
}
else
{
	echo "Wrong Details";
}	
}
}
?>
<a href="index.php">Login</a>