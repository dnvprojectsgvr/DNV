<?php

include('db_conn.php');


if(isset($_POST['userid']))
{
$userid = $_POST['userid'];
$sql = mysql_query("select user_id from users_details where user_id='$userid'");
if(mysql_num_rows($sql))
{
echo '<STRONG>'.$userid.'</STRONG> is already in use.';
}
else
{
echo 'OK';
}
}

?>