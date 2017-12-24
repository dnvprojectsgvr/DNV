<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from contact where id = '$id'")or die(mysql_error());
echo "done";
?>

