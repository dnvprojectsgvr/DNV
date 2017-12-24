<?php
session_start();
if (!isset($_SESSION['name'])) {
	header('Location:login.php');
}
?>
<?php
?>
<html>
<head>
	<title>Administrator Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'after_header.php';
?>

<br>
		<div id="content">
			<?php
				include 'left.php';
			?>
			</div>
			<div class="space"></div>
			<div class="center">
				<center><h1 style='color:white'>Update Computer Laboratories page</h1></center><br>
				<center><form action='complab.php' method='POST' >
					<br><br>
					<textarea style='height:160px; width:600px;' placeholder='Contents' name='full'></textarea><br>
					<input type='submit' value='Update Contents' name='add'>
					<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dnv", $con);
				if (isset($_POST['add'])&&!empty($_POST['full'])) {
					$full=$_POST['full'];
					$query=mysql_query("UPDATE `contents` SET `full_contents`='$full'  WHERE `id`='20'");
					if ($query) {
					 	echo "<b style='color:white;'>Page changed..!</b>";
					 } 
					 else if(!$query)
					 {
					 	echo "<b style='color:white;'>Page is not changed..!</b>";
					 }
						
					
				}
				?>
				</form>
				
			</center>
			</div>
			<div class="space"></div>
			<div>
			<?php
			include 'right.php';
			?>
						</div>
	</div></div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>