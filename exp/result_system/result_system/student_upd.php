<?php
include('db_conn.php');
$uidl =$_REQUEST['userid'];
$result = mysql_query("SELECT * FROM std_reg WHERE userid  = '$uidl'")or die("error in query");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$firstn=$test['first_name'];
				$middlen=$test['middle_name'];					
				$lastn=$test['last_name'];
				$fulln=$test['full_name'];
				$fathn=$test['father_name'];
				$gender=$test['gender'];
				$dobn=$test['dob'];
				$course=$test['course'];
				$semester=$test['semester'];
				$admin_year=$test['admin_year'];
				$rolln=$test['roll_no'];
				$mobn=$test['mobile_no'];
				$emailn=$test['email_id'];
				$uidn=$test['userid'];
				$secur_ques=$test['security_ques'];
				$secur_ans=$test['security_ans'];
?>
<html>
<head>
<title>Student Registration Update</title>
<script src="student_reg.js"></script>
</head>
<body onLoad="document.p.fnam.focus()" bgcolor="LAVENDER">
<h1>Student Registration Page</h1>
<form name="p" method="post" onSubmit="return ch()">
<div><label for="fnam">First Name&nbsp;</label><input type="text" name="fnam" id="fname" placeholder="First Name" onBlur="fn()" onKeyPress="return lettersOnly(event)" onChange="genfullnam()" value="<?php if(isset($firstn)){echo $firstn;} ?>" required><span id="fnerr"></span></div>
<div><label for="mnam">Middle Name&nbsp;</label><input type="text" name="mnam" id="mname" placeholder="Middle Name" onBlur="mn()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" value="<?php echo $middlen ?>" required><span id="mnerr"></span></div>
<div><label for="lnam">Last Name&nbsp;</label><input type="text" name="lnam" id="lname" placeholder="Last Name" onBlur="ln()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" value="<?php echo $lastn ?>" required><span id="lnerr"></span></div>
<div><label for="funam">Full Name&nbsp;</label><input type="text" name="funam" id="fullname" placeholder="Full Name" onBlur="fu()" onKeyPress="return lettersOnly(event)" value="<?php echo $fulln ?>" required><span id="fuerr"></span></div>
<div><label for="fanam">Father Name&nbsp;</label><input type="text" name="fanam" placeholder="Father Name" onBlur="fan()" onKeyPress="return lettersOnly(event)" value="<?php echo $fathn ?>" required><span id="faerr"></span></div>
<div><label for="gen">Gender&nbsp;</label><input type="radio" name="gen" value="Male" onBlur="ge()" <?php if($gender=="male") echo "checked" ?> required>Male
<input type="radio" name="gen" value="Female" onBlur="ge()" <?php if($gender=="female") echo "checked" ?> required>Female<span id="generr"></span></div>
<div><label for="dob">Date Of Birth&nbsp;</label><input type="date" name="dob" value="<?php echo $dobn ?>" required><span id="daerr"></span></div>
<div><label for="co">Course&nbsp;</label><select name="co" id="cos" onBlur="cou()" onChange="genusi()">
<option value="Default" name="sel" <?php if($course=="") echo "selected" ?>>Select Course</option>
<option value="BCA" name="bca" <?php if($course=="bca") echo "selected" ?>>BCA</option>
<option value="BBA" name="bba" <?php if($course=="bba") echo "selected" ?>>BBA</option>
<option value="MSCIT" name="mscit" <?php if($course=="mscit") echo "selected" ?>>MSCIT</option>
</select><span id="coerr"></span></div>
<div><label for="sem">Semester&nbsp;</label><select name="sem" onBlur="semr()">
<option value="Default" name="sel" <?php if($semester=="") echo "selected" ?>>Select Semester</option>
<option value="Semester 1" name="sem1" <?php if($semester=="semester 1") echo "selected" ?>>Semester 1</option>
<option value="Semester 2" name="sem2" <?php if($semester=="semester 2") echo "selected" ?>>Semester 2</option>
<option value="Semester 3" name="sem3" <?php if($semester=="semester 3") echo "selected" ?>>Semester 3</option>
<option value="Semester 4" name="sem4" <?php if($semester=="semester 4") echo "selected" ?>>Semester 4</option>
<option value="Semester 5" name="sem5" <?php if($semester=="semester 5") echo "selected" ?>>Semester 5</option>
<option value="Semester 6" name="sem6" <?php if($semester=="semester 6") echo "selected" ?>>Semester 6</option></select><span id="semerr"></span></div>
<div><label for="ye">Administion Year&nbsp;</label><select name="ye" id="yea" onBlur="yer()" onChange="genusi()">
<option value="Default" name="sel" <?php if($admin_year=="") echo "selected" ?>>Select Year</option>
<option value="2010" name="2010" <?php if($admin_year=="2010") echo "selected" ?>>2010</option>
<option value="2011" name="2011" <?php if($admin_year=="2011") echo "selected" ?>>2011</option>
<option value="2012" name="2012" <?php if($admin_year=="2012") echo "selected" ?>>2012</option>
<option value="2013" name="2013" <?php if($admin_year=="2013") echo "selected" ?>>2013</option>
<option value="2014" name="2014" <?php if($admin_year=="2014") echo "selected" ?>>2014</option>
<option value="2015" name="2015" <?php if($admin_year=="2015") echo "selected" ?>>2015</option>
<option value="2016" name="2016" <?php if($admin_year=="2016") echo "selected" ?>>2016</option>
<option value="2017" name="2017" <?php if($admin_year=="2017") echo "selected" ?>>2017</option>
<option value="2018" name="2018" <?php if($admin_year=="2018") echo "selected" ?>>2018</option>
<option value="2019" name="2019" <?php if($admin_year=="2019") echo "selected" ?>>2019</option>
<option value="2020" name="2020" <?php if($admin_year=="2020") echo "selected" ?>>2020</option>
<option value="2021" name="2021" <?php if($admin_year=="2021") echo "selected" ?>>2021</option>
<option value="2022" name="2022" <?php if($admin_year=="2022") echo "selected" ?>>2022</option>
<option value="2023" name="2023" <?php if($admin_year=="2023") echo "selected" ?>>2023</option>
<option value="2024" name="2024" <?php if($admin_year=="2024") echo "selected" ?>>2024</option>
<option value="2025" name="2025" <?php if($admin_year=="2025") echo "selected" ?>>2025</option>
<option value="2026" name="2026" <?php if($admin_year=="2026") echo "selected" ?>>2026</option>
<option value="2027" name="2027" <?php if($admin_year=="2027") echo "selected" ?>>2027</option>
<option value="2028" name="2028" <?php if($admin_year=="2028") echo "selected" ?>>2028</option>
<option value="2029" name="2029" <?php if($admin_year=="2029") echo "selected" ?>>2029</option>
<option value="2030" name="2030" <?php if($admin_year=="2030") echo "selected" ?>>2030</option></select><span id="yeerr"></span></div>
<div><label for="roll">Roll No&nbsp;</label><input type="text" name="roll" id="roll" placeholder="eg:-15" onBlur="rollr()" onChange="genusi()" onkeypress="return isNumber(event)" required value="<?php echo $rolln ?>"><span id="rollerr"></span></div>
<div><label for="mo">Mobile no&nbsp;</label><input type="text" value="+91" size="1" name="modigit" disabled><input type="text" name="mo" maxlength="10" placeholder="eg:-9587823867" onBlur="mob()" onkeypress="return isNumber(event)" value="<?php echo $mobn ?>" required><span id="moerr"></span></div>
<div><label for="em">Email id&nbsp;</label><input type="text" name="em" placeholder="Email id eg:abc@gmail.com" onBlur="ema()" value="<?php echo $emailn ?>" required><span id="emerr"></span></div>
<div><label for="pwd">Password&nbsp;</label><input type="password" name="pwd" placeholder="eg:-ram@47863" onBlur="pass()" required><span id="pwderr"></span></div>
<div><label for="pwde">Cofirm Password&nbsp;</label><input type="password" name="pwde" placeholder="eg:-ram@47863" onBlur="pass()" required><span id="pwdeerr"></span></div>
<div><label for="userid">User Id&nbsp;</label><input type="text" name="userid" id="usi" value="<?php echo $uidn ?>" readonly></div>
<input type="hidden" name="uid1" value="<?php echo $uidn; ?>">
<div><label for="secr">Security Question</label><select name="secr" onBlur="sec()">
	<option value="Default" <?php if($secur_ques=="") echo "selected" ?>>Select Security Question</option>
	<option value="favourite teacher" <?php if($secur_ques=="favourite teacher") echo "selected" ?>>What Is Your Favourite Teacher Name&#63;</option>
	<option value="mother name" <?php if($secur_ques=="mother name") echo "selected" ?>>What Is Your Mother Name&#63;</option>
	<option value="childhood friend" <?php if($secur_ques=="childhood friend") echo "selected" ?>>What Is Your Childhood Friend Name&#63;</option>
	<option value="favourite food" <?php if($secur_ques=="favourite food") echo "selected" ?>>What Is Your Favourite Food&#63;</option></select><span id="secerr"></span></div>
<div><label for="seca">Security Answer</label><input type="text" name="seca" placeholder="eg:-ram" onKeyPress="return lettersOnly(event)" onBlur="secan()" value="<?php echo $secur_ans ?>" required><span id="secaerr"></span></div>
<div><input type="submit" value="Submit">&nbsp;<input type="reset" value="Reset"></div>
</form>
</body>
</html>
<?php
if($_POST)
{
$fnam=$_POST['fnam'];
$fnaml=strtolower($fnam);
$mnam=$_POST['mnam'];
$mnaml=strtolower($mnam);
$lnam=$_POST['lnam'];
$lnaml=strtolower($lnam);
$funam=$_POST['funam'];
$funaml=strtolower($funam);
$fanam=$_POST['fanam'];
$fanaml=strtolower($fanam);
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$course=$_POST['co'];
$semester=$_POST['sem'];
$admin_year=$_POST['ye'];
$roll=$_POST['roll'];
$mob=$_POST['mo'];
$email=$_POST['em'];
$emaill=strtolower($email);
$pass=$_POST['pwd'];
$uid=$_POST['userid'];
$uidn=$_POST['uid1'];
$uidl=strtolower($uid);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
include('db_conn.php');
$query="update std_reg set first_name='$fnaml',middle_name='$mnaml',last_name='$lnaml',full_name='$funaml',father_name='$fanaml',gender='$gen',dob='$dob',course='$course',semester='$semester',admin_year='$admin_year',roll_no='$roll',mobile_no='$mob',email_id='$emaill',password='$pass',userid='$uidl',security_ques='$secql',security_ans='$secal' where userid='$uidn'";
mysql_query($query)or die("error in query");
if($course=="BCA")
{
mysql_query("update std_bca set std_id='$uidl' where std_id='$uidn'")or die("error in std_bca");
}
elseif($course=="BBA")
{
mysql_query("update std_bba set std_id='$uidl' where std_id='$uidn'")or die("error in std_bba");
}
if(!$query)
{
	echo "error in query";
}
else
{
	echo "saved";
	header("Location:index.php");
}
}
?>
<a href="index.php">login</a>