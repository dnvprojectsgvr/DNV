<?php
$id=$_GET['id'];
$query=mysql_query("DELETE * FROM `users` WHERE `id`='$id'");
if (!$query) {
	echo "Delete Error";
}
else
{
	header("Location: users.php");
}
?>