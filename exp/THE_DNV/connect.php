<title>DNV COLLEGE</title><?php
$con=mysql_connect('localhost','root','');
if (!$con) {
	echo "You are not connected";
}
$data=mysql_select_db('dnv',$con);
if (!$data) {
	echo mysql_error();
}
?>