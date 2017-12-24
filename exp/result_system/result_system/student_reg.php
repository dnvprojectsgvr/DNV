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
$dob=$_POST['birthday_year']."/".$_POST['birthday_month']."/".$_POST['birthday_day'];
$course=$_POST['co'];
$admin_year=$_POST['ye'];
$roll=$_POST['roll'];
$mob=$_POST['mo'];
$email=$_POST['em'];
$emaill=strtolower($email);
$pass=$_POST['pwd'];
$uid=$_POST['userid'];
$uidl=strtolower($uid);
$secq=$_POST['secr'];
$secql=strtolower($secq);
$seca=$_POST['seca'];
$secal=strtolower($seca);
}
?>
<!doctype html>
<html>
<head>
<title>Student Registration Page</title>
<script src="student_reg.js"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script src="userid_student.js"></script>
</head>
<body onLoad="document.p.fnam.focus()" bgcolor="LAVENDER">
<h1>Student Registration Page</h1>
<form name="p" method="post" onSubmit="return confirm('Are You Sure To Submit The Form');">
<div><label for="fnam">First Name&nbsp;</label><input type="text" name="fnam" id="fname" placeholder="First Name" maxlength="45" onBlur="fn()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" required><span id="fnerr"></span><?php if($_POST){ if (!preg_match("/^[a-zA-Z ]*$/",$fnam)) {
  $cherr="Only letters and white space allowed"; echo $cherr; }}?></div>
<div><label for="mnam">Middle Name&nbsp;</label><input type="text" name="mnam" id="mname" placeholder="Middle Name" maxlength="45" onBlur="mn()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)"><span id="mnerr"></span></div>
<div><label for="lnam">Last Name&nbsp;</label><input type="text" name="lnam" id="lname" placeholder="Last Name" maxlength="45" onBlur="ln()" onChange="genfullnam()" onKeyPress="return lettersOnly(event)" required><span id="lnerr"></span></div>
<div><label for="funam">Full Name&nbsp;</label><input type="text" name="funam" id="fullname" placeholder="Full Name" maxlength="100" onBlur="fu()" onKeyPress="return lettersOnly(event)" required><span id="fuerr"></span></div>
<div><label for="fanam">Father Name&nbsp;</label><input type="text" name="fanam" placeholder="Father Name" maxlength="45" onBlur="fan()" onKeyPress="return lettersOnly(event)" required><span id="faerr"></span></div>
<div><label for="gen">Gender&nbsp;</label><input type="radio" name="gen" value="Male" onBlur="ge()" required>Male
<input type="radio" name="gen" value="Female" onBlur="ge()" required>Female<span id="generr"></span></div>
<div><label for="dob">Date Of Birth&nbsp;</label><select name="birthday_day" id="day" title="Day" onblur="dt_check()">
<option value="0">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5" selected="1">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>	
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="birthday_month" id="month" title="Month" onblur="dt_check()">
<option value="0">Month</option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7" selected="1">Jul</option>
<option value="8">Aug</option>
<option value="9">Sept</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select name="birthday_year" id="year" title="Year" onblur="dt_check()">
<option value="0">Year</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999" selected="1">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
</select><span id="birtherr"></span></div>
<div><label for="co">Course&nbsp;</label><select name="co" id="cos" onBlur="cou()" onChange="genusi()">
<option value="Default" name="sel">Select Course</option>
<option selected="" value="BCA" name="bca">BCA</option>
<option value="BBA" name="bba">BBA</option>
<option value="MSCIT" name="mscit">MSCIT</option>
</select><span id="coerr"></span></div>
<div><label for="ye">Administion Year&nbsp;</label><select name="ye" id="yea" onBlur="yer()" onChange="genusi()">
<option value="Default" name="sel">Select Year</option>
<option selected="" value="2010" name="2010">2010</option>
<option value="2011" name="2011">2011</option>
<option value="2012" name="2012">2012</option>
<option value="2013" name="2013">2013</option>
<option value="2014" name="2014">2014</option>
<option value="2015" name="2015">2015</option>
<option value="2016" name="2016">2016</option>
<option value="2017" name="2017">2017</option>
<option value="2018" name="2018">2018</option>
<option value="2019" name="2019">2019</option>
<option value="2020" name="2020">2020</option>
<option value="2021" name="2021">2021</option>
<option value="2022" name="2022">2022</option>
<option value="2023" name="2023">2023</option>
<option value="2024" name="2024">2024</option>
<option value="2025" name="2025">2025</option>
<option value="2026" name="2026">2026</option>
<option value="2027" name="2027">2027</option>
<option value="2028" name="2028">2028</option>
<option value="2029" name="2029">2029</option>
<option value="2030" name="2030">2030</option></select><span id="yeerr"></span></div>
<div><label for="roll">Roll No&nbsp;</label><input type="text" name="roll" id="roll" placeholder="eg:-15" maxlength="3" onBlur="rollr()" onChange="genusi()" onkeypress="return isNumber(event)" required><span id="rollerr"></span></div>
<div><label for="mo">Mobile no&nbsp;</label><input type="text" value="+91" size="1" name="modigit" disabled>
<input type="text" name="mo" maxlength="10" placeholder="eg:-9587823867" id="usi" onBlur="mob()" onkeypress="return isNumber(event)" required><span id="moerr"></span></div>
<div><label for="em">Email id&nbsp;</label><input type="text" name="em" placeholder="Email id eg:abc@gmail.com" maxlength="255" onBlur="ema()" required><span id="emerr"></span></div>
<div><label for="userid">User Id&nbsp;</label><input type="text" name="userid" id="userid" placeholder="eg:-2010bca12" readonly><span id="status"></span></div>
<div><label for="pwd">Password&nbsp;</label><input type="password" name="pwd" placeholder="eg:-Ram@47863" maxlength="255" onBlur="pass()" required><span id="pwderr"></span></div>
<div><label for="pwde">Cofirm Password&nbsp;</label><input type="password" name="pwde" placeholder="eg:-Ram@47863" maxlength="255" onBlur="pass1()" required><span id="pwdeerr"></span></div>
<div><label for="secr">Security Question&nbsp;</label><select name="secr" onBlur="sec()">
	<option value="Default">Select Security Question</option>
	<option selected="" value="favourite teacher">What Is Your Favourite Teacher Name&#63;</option>
	<option value="mother name">What Is Your Mother Name&#63;</option>
	<option value="childhood friend">What Is Your Childhood Friend Name&#63;</option>
	<option value="favourite food">What Is Your Favourite Food&#63;</option></select><span id="secerr"></span><?php if($_POST){ if ($secq=="Default") {
  $cherr="Please Select Security Question"; echo $cherr; }}?></div>
<div><label for="seca">Security Answer</label><input type="text" name="seca" placeholder="eg:-ram" maxlength="60" onKeyPress="return lettersOnly(event)" onBlur="secan()" required><span id="secaerr"></span></div>
<div><input type="submit" name="Submit" value="Submit">&nbsp;<input type="reset" name="Reset" value="Reset"></div>
</form>
</body>
</html>
<br>
<a href="index.php">login</a>
<?php
if($_POST)
{
if (!isset($cherr))
{
$u_type="student";
$status="deactive";
echo "<br>";
include('db_conn.php');
mysql_query("insert into users_details (user_id,password,security_ques,security_ans,user_type,status) values('$uidl','$pass','$secql','$secal','$u_type','$status')")or die("error in user_id");
$res=mysql_query("insert into student_details (student_id,f_name,m_name,l_name,full_name,father_name,gender,mob_no,email_id,admin_year,roll_no,course,dob) values('$uidl','$fnaml','$mnaml','$lnaml','$funaml','$fanaml','$gen','$mob','$emaill','$admin_year','$roll','$course','$dob')");

if(!$res)
{
	echo "error in query";
}
else
{
	echo "Your Form Submited Sucessfully";	
	header( "refresh:5;url=index.php" );
}
}
}
?>