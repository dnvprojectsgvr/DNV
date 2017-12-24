<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
$delete = mysql_query("delete from event where event_id = '$id'")or die(mysql_error());
if($delete){
	echo "done";
}else{
	echo "error";
}
?>

