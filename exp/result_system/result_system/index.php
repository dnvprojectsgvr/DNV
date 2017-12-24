<!doctype html>
<html>
	<head>
		<title>login</title>
		<script src="login.js"></script>
	</head>
	<body>
		<form method="post" name="p">
    		<div>
    			<label for="userid">USERID&nbsp;</label>
    			<input type="text" id="usid1" name="userid" onBlur="logu()" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;" onpaste="return false;" required>
    			<span id="uierr"></span>
    			<span id="error" style="color: Red; display: none">* Special Characters not allowed</span>
    		</div>
    		<div>
    			PASSWORD&nbsp;
    			<input type="password" name="password" onBlur="logp()" ondrop="return false;" onpaste="return false;" required>
    			<span id="paerr"></span>
    		</div>
    		<div>
    			<input type="submit" value="Login">
    		</div>
    		<a href="forget_password.php">Forget Password&#63;</a>&nbsp;
    		<a href="student_reg.php">Student Register</a> &nbsp;
    		<a href="faculty_reg.php">Faculty Register</a>
		</form>
	</body>
</html>

<?php
if($_POST)
{
    session_start();

    include('db_conn.php');
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $useridl=strtolower($userid); 
    $query="select * from users_details where user_id='$useridl' and password='$password'";
    $result=mysql_query($query) or mysql_error("error in query");
    $row=mysql_fetch_row($result);
	if($row[0]==$useridl && $row[1]==$password)
    {
    if($row[4]=="student" && $row[5]=="active")
    {
    $_SESSION['studentid']=$row[0];
    if(isset($_SESSION['studentid']))
    {
      header('location:student_profile.php');
    }
	else
	{
		header('location:index.php');
	}
    }
    elseif($row[4]=="student" && $row[5]=="deactive")
    {
      echo "Admin Permission Is Denied";
    }
    elseif($row[4]=="faculty" && $row[5]=="active")
    {
    $_SESSION['facultyid']=$row[0];
    if(isset($_SESSION['facultyid']))
    {
      header('location:faculty_profile.php');
    }
	else
	{
		header('location:index.php');
	}
    }
    elseif($row[4]=="faculty" && $row[5]=="deactive")
    {
      echo "Admin Permission Is Denied"; 
    }
	}
	else
    {
      echo "Wrong Userid And Password";
	}
}
?>