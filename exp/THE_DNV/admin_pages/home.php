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
				<h4 align='center' style='color:white;'>
				
				</h4>
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