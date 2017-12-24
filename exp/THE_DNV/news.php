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
	<h1 align="center" class="welcome">News</h1><hr>
	<h4 align="center">
		<?php 
				$id=$_GET['id'];
				$query=mysql_query("SELECT * FROM `news` WHERE `id`='$id'");
				if ($row=mysql_fetch_assoc($query)) {
					$heading=$row['heading'];
					$full_news=$row['full_news'];
					echo '&nbsp;&nbsp;&nbsp;'.$full_news;
					
				}

				?>
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