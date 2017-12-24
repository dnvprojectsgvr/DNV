<!DOCTYPE html>
<html>
<head>
	<title>Online Application</title>
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background-color: #E4E4E4;
		}
		.wrapper
		{
			height:auto;
			width: 800px;
			margin: 0 auto;
		}
		.header
		{
			height: 80px;
			padding-top: 20px;
		}
		.heading
		{
			color: red;
			font-size: 40px;
			font-weight: bold;
		}
		.heading2
		{
			color: red;
			font-size: 20px;
			font-weight: bold;
		}
		.content
		{
			height: 800px;
			background-color: white;
		}
		.footer
		{
			height: 50px;
			background-color: #560000;
			padding-top: 20px;
			padding-left: 10px;
		}
		
		.input
		{
			height: 40px;
			width: 300px;
			margin-left: 10px;
		}
		.table_maneno
		{
			font-size: 20px;
			text-align: center;
		}
		.in
		{
			width: 30%;
		}
		.footer_text
		{
			color: white;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<div class='wrapper'>
		<div class='header'>
			<b class='heading'><center>
			  DNV COLLEGE 
			</center>
			</b>
			<center><b class='heading2'>APPLICATION FORM</b></center>
		</div>
			<form action='online.php' method='POST'>
		<div class='content'>
				<?php
		if (isset($_POST['submit'])&&!empty($_POST['firstname'])&&!empty($_POST['middlename'])&&!empty($_POST['surname'])&&!empty($_POST['phone'])&&!empty($_POST['email'])&&!empty($_POST['programme'])&&!empty($_POST['education'])&&!empty($_POST['certificate'])&&!empty($_POST['relationship'])) {
			$con=mysql_connect('localhost','root','');
			if (!$con) {
				echo mysql_error();
			}
			$data=mysql_select_db('dnv',$con);
			if (!$data) {
				echo mysql_error();
			}
			$firstname=$_POST['firstname'];
			$middlename=$_POST['middlename'];
			$surname=$_POST['surname'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$programme=$_POST['programme'];
			$education=$_POST['education'];
			$certificate=$_POST['certificate'];
			$relationship=$_POST['relationship'];
			$query="INSERT INTO `application` VALUES ('','$firstname','$middlename','$surname','$phone','$email','$programme','$education','$certificate','$relationship')";
			if ($query_run=mysql_query($query)) {
				echo "<center>Thank you for your application we shall contact you as soon as possible..!</center>";
			}
			else
			{
				echo "<center>Sorry Try again..!</center>";
			}
		}
		else
		{
			echo "<center>All field are required</center>";
		}
		?>
			<br>
			<table align='center'>
				<tr>
					<td><b class='table_maneno'>FIRSTNAME</b></td>
					<td>
						<input type='text' class='input' name='firstname'>
					</td>
				</tr><hr>
				<tr>
					<td><b class='table_maneno'>MIDDLENAME</b></td>
					<td>
						<input type='text' class='input' name='middlename'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>SURNAME</b></td>
					<td>
						<input type='text' class='input' name='surname'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>PHONE NO:</b></td>
					<td>
						<input type='text' class='input' name='phone'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>EMAIL</b></td>
					<td>
						<input type='text' class='input' name='email'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>PROGRAMME</b></td>
					<td>
						<select class='input' name='programme'>
							<option><i>BCA</i></option>
							<option>BBA</option>
							<option>M.Sc.- IT</option>

						</select>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>SELECT SEMESTER</b></td>
					<td>
						<select class='input' name='education'>
							<option></option>
							<option>Two</option>
                        	<option>Four</option>
							<option>Six</option>

						</select>
					</td>
				</tr>
							
							
						</table>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>UPLOAD CERTIFICATE</b></td>
					<td>
						<input type='file' class='input' name='certificate'>
					</td>
				</tr>
				<tr>
					<td><br><b class='table_maneno'>RELATIONSHIP</b></td>
					<td>
						<select class='input' name='relationship'>
							<option></option>
							<option>Single</option>
							<option>Married</option>
							<option>Engaged</option>
						</select>
					</td>
				</tr>
				
			</table>

			<br><br>
			<center><input type='submit' value='submit' class='input' name='submit'></center>
		
		</div>
		
	</form>
		<div class='footer'>
			<b class='footer_text'>Copyright &copy;  2016 DNV International Education Academy <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Designed By:____</b>
		</div>
	</div>
</body>
</html>