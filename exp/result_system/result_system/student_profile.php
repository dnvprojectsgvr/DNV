WELCOME  STUDENT<br>
<?php
session_start();
if(isset($_SESSION['studentid']))
{
	echo $_SESSION['studentid'];
}
else
{
        header('location:index.php');
}
?>
<br>
<a href="logout.php"> logout </a>