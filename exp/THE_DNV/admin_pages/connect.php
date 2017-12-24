<?php
$con=mysql_connect('localhost','root','');
if (!$con) {
	echo "Your not connected to the database".mysql_error();
}
echo "<br>";
$data=mysql_select_db("dnv",$con);
if (!$data) {
	echo mysql_error();
}

?>