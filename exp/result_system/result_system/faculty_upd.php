<?php
include('db_conn.php');
$fcil =$_REQUEST['facultyid'];
$result = mysql_query("SELECT * FROM faculty_reg WHERE facultyid  = '$fcil'")or die("error in query");
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
				$aqualst=$test['qualification'];
				$join_year=$test['joining_year'];
				$mobn=$test['mobile_no'];
				$emailn=$test['email_id'];
				$fcin=$test['facultyid'];
				$secur_ques=$test['security_ques'];
				$secur_ans=$test['security_ans'];
$qualst=explode(" ", $aqualst);
?>
<html>
<head>
<title>Faculty Registration Update</title>
<script src="faculty_reg.js"></script>
</head>
<body onLoad="document.p.fnam.focus()" bgcolor="LAVENDER">
<h1>Faculty Registration Page</h1>
<form name="p" method="post" onSubmit="return ch()">
<div><label for="fnam">First Name&nbsp;</label><input type="text" name="fnam" id="fname" placeholder="First Name" onBlur="fn()" onKeyPress="return lettersOnly(event)" onChange="genfullnam()" value="<?php if(isset($firstn)){echo $firstn;} ?>" required><span id="fnerr"></span></div>
<div><label for="mnam">Middle Name&nbsp;</label><input type="text" name="mnam" id="mname" placeholder="Middle Name" onBlur="mn()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" value="<?php echo $middlen ?>" required><span id="mnerr"></span></div>
<div><label for="lnam">Last Name&nbsp;</label><input type="text" name="lnam" id="lname" placeholder="Last Name" onBlur="ln()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" value="<?php echo $lastn ?>" required><span id="lnerr"></span></div>
<div><label for="funam">Full Name&nbsp;</label><input type="text" name="funam" id="fullname" placeholder="Full Name" onBlur="fu()" onKeyPress="return lettersOnly(event)" onChange="genusi()" value="<?php echo $fulln ?>" required><span id="fuerr"></span></div>
<div><label for="fanam">Father Name&nbsp;</label><input type="text" name="fanam" placeholder="Father Name" onBlur="fan()" onKeyPress="return lettersOnly(event)" value="<?php echo $fathn ?>" required><span id="faerr"></span></div>
<div><label for="gen">Gender&nbsp;</label><input type="radio" name="gen" value="Male" onBlur="ge()" <?php if($gender=="male") echo "checked" ?> required>Male
<input type="radio" name="gen" value="Female" onBlur="ge()" <?php if($gender=="female") echo "checked" ?> required>Female<span id="generr"></span></div>
<div><label for="dob">Date Of Birth&nbsp;</label><input type="date" name="dob" value="<?php echo $dobn ?>" required><span id="daerr"></span></div>
<div><label for="qualif">Qualification&nbsp;</label><input type="checkbox" name="qualif[]" value="BCA" onBlur="qual()" <?php if(in_array("BCA", $qualst)==1) echo "checked"; ?>>BCA
<input type="checkbox" name="qualif[]" value="BBA" onBlur="qual()" <?php if(in_array("BBA", $qualst)==1) echo "checked"; ?>>BBA
<input type="checkbox" name="qualif[]" value="MCA" onBlur="qual()" <?php if(in_array("MCA", $qualst)==1) echo "checked"; ?>>MCA
<input type="checkbox" name="qualif[]" value="MBA" onBlur="qual()" <?php if(in_array("MBA", $qualst)==1) echo "checked"; ?>>MBA
<input type="checkbox" name="qualif[]" value="MSCIT" onBlur="qual()" <?php if(in_array("MSCIT", $qualst)==1) echo "checked"; ?>>MSCIT
<input type="checkbox" name="qualif[]" value="BE" onBlur="qual()" <?php if(in_array("BE", $qualst)==1) echo "checked"; ?>>BE
<input type="checkbox" name="qualif[]" value="ME" onBlur="qual()" <?php if(in_array("ME", $qualst)==1) echo "checked"; ?>>ME
<input type="checkbox" name="qualif[]" value="BTECH" onBlur="qual()" <?php if(in_array("BTECH", $qualst)==1) echo "checked"; ?>>BTECH
<input type="checkbox" name="qualif[]" value="MTECH" onBlur="qual()" <?php if(in_array("MTECH", $qualst)==1) echo "checked"; ?>>MTECH
<span id="qualerr"></span></div>
<div><label for="ye">Joining Year&nbsp;</label><select name="ye" id="yea" onBlur="yer()" onChange="genusi()">
<option value="Default" name="sel" <?php if($join_year=="") echo "selected" ?>>Select Year</option>
<option value="2010" name="2010" <?php if($join_year=="2010") echo "selected" ?>>2010</option>
<option value="2011" name="2011" <?php if($join_year=="2011") echo "selected" ?>>2011</option>
<option value="2012" name="2012" <?php if($join_year=="2012") echo "selected" ?>>2012</option>
<option value="2013" name="2013" <?php if($join_year=="2013") echo "selected" ?>>2013</option>
<option value="2014" name="2014" <?php if($join_year=="2014") echo "selected" ?>>2014</option>
<option value="2015" name="2015" <?php if($join_year=="2015") echo "selected" ?>>2015</option>
<option value="2016" name="2016" <?php if($join_year=="2016") echo "selected" ?>>2016</option>
<option value="2017" name="2017" <?php if($join_year=="2017") echo "selected" ?>>2017</option>
<option value="2018" name="2018" <?php if($join_year=="2018") echo "selected" ?>>2018</option>
<option value="2019" name="2019" <?php if($join_year=="2019") echo "selected" ?>>2019</option>
<option value="2020" name="2020" <?php if($join_year=="2020") echo "selected" ?>>2020</option>
<option value="2021" name="2021" <?php if($join_year=="2021") echo "selected" ?>>2021</option>
<option value="2022" name="2022" <?php if($join_year=="2022") echo "selected" ?>>2022</option>
<option value="2023" name="2023" <?php if($join_year=="2023") echo "selected" ?>>2023</option>
<option value="2024" name="2024" <?php if($join_year=="2024") echo "selected" ?>>2024</option>
<option value="2025" name="2025" <?php if($join_year=="2025") echo "selected" ?>>2025</option>
<option value="2026" name="2026" <?php if($join_year=="2026") echo "selected" ?>>2026</option>
<option value="2027" name="2027" <?php if($join_year=="2027") echo "selected" ?>>2027</option>
<option value="2028" name="2028" <?php if($join_year=="2028") echo "selected" ?>>2028</option>
<option value="2029" name="2029" <?php if($join_year=="2029") echo "selected" ?>>2029</option>
<option value="2030" name="2030" <?php if($join_year=="2030") echo "selected" ?>>2030</option></select><span id="yeerr"></span></div>
<div><label for="mo">Mobile no&nbsp;</label><input type="text" value="+91" size="1" name="modigit" disabled><input type="text" name="mo" id="moi" maxlength="10" placeholder="eg:-9587823867" onBlur="mob()" onkeypress="return isNumber(event)" onChange="genusi()" value="<?php echo $mobn ?>" required><span id="moerr"></span></div>
<div><label for="em">Email id&nbsp;</label><input type="text" name="em" placeholder="Email id eg:abc@gmail.com" onBlur="ema()" value="<?php echo $emailn ?>" required><span id="emerr"></span></div>
<div><label for="pwd">Password&nbsp;</label><input type="password" name="pwd" placeholder="eg:-ram@47863" onBlur="pass()" required><span id="pwderr"></span></div>
<div><label for="pwde">Cofirm Password&nbsp;</label><input type="password" name="pwde" placeholder="eg:-ram@47863" onBlur="pass()" required><span id="pwdeerr"></span></div>
<div><label for="facultyid">Faculty Id&nbsp;</label><input type="text" name="facultyid" id="fci" value="<?php echo $fcin ?>" readonly></div>
<input type="hidden" name="fci1" value="<?php echo $fcin; ?>">
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
$qual=$_POST['qualif'];
$qualstore="";
foreach($qual as $qualst)
{
	$qualstore.=$qualst." ";
}
$join_year=$_POST['ye'];
$mob=$_POST['mo'];
$email=$_POST['em'];
$emaill=strtolower($email);
$pass=$_POST['pwd'];
$fci=$_POST['facultyid'];
$fcin=$_POST['fci1'];
$fcil=strtolower($fci);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
include('db_conn.php');
$query="update faculty_reg set first_name='$fnaml',middle_name='$mnaml',last_name='$lnaml',full_name='$funaml',father_name='$fanaml',gender='$gen',dob='$dob',qualification='$qualstore',joining_year='$join_year',mobile_no='$mob',email_id='$emaill',password='$pass',facultyid='$fcil',security_ques='$secql',security_ans='$secal' where facultyid='$fcin'";
mysql_query($query)or die("error in query");
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