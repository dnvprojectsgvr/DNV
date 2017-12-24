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
				<center><h1 style='color:white'>ADD NEWS</h1></center><br>
				<center><form action='news.php' method='POST' >
					<input type='text' name='heading' style='height:40px; width:300px; text-align:center;' placeholder='Enter news heading'><br><br>
					<textarea style='height:160px; width:600px;' placeholder='Enter full news deatails here' name='full'></textarea><br>
					<input type='submit' value='ADD NEWS' name='add'>
					<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dnv", $con);
				if (isset($_POST['add'])&&!empty($_POST['heading'])&&!empty($_POST['full'])) {
					$heading=$_POST['heading'];
					$full=$_POST['full'];
					$query="INSERT INTO `news` VALUES ('','$heading','$full')";
					if ($query_run=mysql_query($query)) {
					 	echo "<b style='color:white;'>This news is added..!</b>";
					 } 
					 else
					 {
					 	echo "<b style='color:white;'>News is not added..!</b>";
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