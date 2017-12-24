<?php
session_start();
if (!isset($_SESSION['name'])) {
	header('Location:login.php');
}
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
				<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dnv", $con);
echo "<table align='center' height='auto' width='60%' bgcolor='white' border='1px solid'style='text-align:center;'>
  	<tr>
  		<th>ID</th>
  		<th>NAME</th>
  		<th>PASSWORD</th>
  		<th>DELETE</th>
  	</tr>";

$result = mysql_query("SELECT * FROM users");
while($row = mysql_fetch_array($result))
  {
  	$id = $row['id'];
  	echo "<tr>"."<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['password']."</td>"."<td>"."<a href='delete.php?id=".$id."' name='futa'>D</a>"."</td>"."</tr>";
  }
echo "</table>";
mysql_close($con);
?>
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