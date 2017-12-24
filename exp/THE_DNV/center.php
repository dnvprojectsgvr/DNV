<div id="center">
	<h1 align="center" class="welcome">Welcome</h1><hr>
	<h4 align="center" style="font-family:Lucida Bright;">
		 <?php
		 $query=mysql_query("SELECT * FROM `contents` WHERE `id`='1'");
		 if ($row=mysql_fetch_assoc($query)) {
		 	echo $row['full_contents'];

		 }
		 ?>
</h4></div>