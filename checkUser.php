<?php
include "db_conn.php";

$uname = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);


if ($uname != "" && $password != "")
{

 /*    $query = mysql_query("select * from users_details where user_id='".$uname."'");
     $user_type = mysql_fetch_array($query);
     $user_type = $user_type['user_type'];
*/

    $sql_query = "select count(*) as cntUser from users_details where user_id='".$uname."' and password='".$password."'";
   
    $result = mysql_query($sql_query);
    $row = mysql_fetch_array($result);

    
   //  if ($user_type == 'student')

    $count = $row['cntUser'];

    if($count > 0)
    {
        $_SESSION['uname'] = $uname;

        echo 1;
    }
    else
    {
        echo 0;
    }
}
?>