<html>
<head>
	<title>DNV COLLEGE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>
<div id="content">
		<?php
		include 'left.php';
		?>
		
		<div id="center">
	<h1 align="center" class="welcome">Online Application</h1>
	<center>
		<img src="img/print.png" title="Print the whole Addmission Form">&nbsp;&nbsp;&nbsp;<b>step 1</b>
	</center>
	<hr>
	<center>
		<h4 align="center">
		<form action="#" method="POST">
			<table class="jisajiri">
				<tr>
					Please tick ( v ) the entry scheme you applying for: 
				</tr>
				<tr>
					<th>TRAINING PROGRAME</th>
					<th>ENTRY SCHEME</th>
					<th>CHOICE</th>
				</tr>
				<tr>
					<td>Ordinary Diploma (OD)</td>
					<td>
						<table width="100%" class="table_two">
							<tr>
								<td>Direct Entry Scheme</td>
							</tr>
							<tr>
								<td>Mature Age entry Scheme</td>
							</tr>
							<tr>
								<td>Pre. Entry (Access Course) Scheme</td>
							</tr>
						</table>
					</td>
					<td>
						<table width="100%" class="table_two">
							<tr>
								<td><input type="checkbox"></td>
							</tr>
							<tr>
								<td><input type="checkbox"></td>
							</tr>
							<tr>
								<td><input type="checkbox"></td>
							</tr>
						</table>
					</td>
				</tr>
				

			</table>

			

			<table class="jisajiri" id="jisa">
				<tr>
					Please number your preferences (Only three choices) 
				</tr>
				<tr>
					<th>S/No</th>
					<th>TRAINING COURSES</th>
					<th>CHOICE</th>
				</tr>
				<tr>
					<td class="kati">1</td>
					<td>BCA</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">2</td>
					<td>BBA</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">3</td>
					<td>M.Sc.-IT</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati"></td>
					<td><input type="submit" value="Next >>>" style="color:red; height:30px; width:50%;"></td>
					<td></td>
				</tr>
								
			</table>
		</form>
</div></h4>
	</center>
	
       
		<?php
		include 'right.php';
		?>
	</div>
</div>
	
	<?php
	include 'footer.php';
	?>
</html>
