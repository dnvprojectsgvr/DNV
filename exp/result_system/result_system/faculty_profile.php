WELCOME  faculty<br>
<?php
session_start();
if(isset($_SESSION['facultyid']))
{
	echo $_SESSION['facultyid'];
}
else
{
        header('location:index.php');
}
?>
<br>
<a href="logout.php"> logout </a>