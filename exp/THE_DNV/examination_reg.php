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
	<h1 align="center" class="welcome">Examination Reguration</h1><hr>
	<h4 align="center">
	<h4 align="center" style="font-family:Lucida Bright;">
		 <?php
		 $query=mysql_query("SELECT * FROM `contents` WHERE `id`='14'");
		 if ($row=mysql_fetch_assoc($query)) {
		 	echo $row['full_contents'];

		 }
		 ?>
</h4>
</div></h4>
        
		<?php
		include 'right.php';
		?>
	</div>
</div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>