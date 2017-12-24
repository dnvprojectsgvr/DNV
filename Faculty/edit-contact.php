<?php include('header_dashboard.php'); ?>
<?php
if (isset($_GET['event'])){
$contact_id = $_GET['event'];
	$query = mysql_query("select * from  contact where id=$contact_id")or die(mysql_error());
	$row = mysql_fetch_array($query);

		$number   = $row['number'];
		$name   = $row['name'];
		$mobile   = $row['mobile'];
		$email  = mysql_real_escape_string($row['email']);
		$work  = $row['work'];
		$address  = mysql_real_escape_string($row['address']);
		$school  = $row['school'];
		$group  = $row['group'];
		$note = mysql_real_escape_string($row['note']);
}
?>


<?php $id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('calendar_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
				
					     <ul class="breadcrumb">
							<li><a href="#">User:</a> <span class="divider">/</span></li>
							<li><a href="#">Contact:</a> <span class="divider">/</span></li>
							<li><a href="#"><b>Edit</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
								<?php
								$query = mysql_query("select * from contact where user_id = '$id'")or die(mysql_error());
									$count = mysql_num_rows($query);
								?>
                                <div id="" class="muted"><span class="muted pull-left">ALL CONTACT IN RECORDES </span><span class="muted  pull-right badge badge-info"><?php echo $count; ?></span></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<div class="pull-left">
								<?php
									while($row = mysql_fetch_array($query)){
								?>
									<div id="del<?php echo $row['id'];?>" class="alert"><i class="icon-list"></i> <?php echo strtoupper($row['name']); ?> <i class="icon-list"></i> <?php echo strtoupper($row['mobile']); ?> 
									<i class="alert alert-info">
										<span class="icon-edit icon-small" > <a id="edit_event" href="edit-event.php?id=<?php echo $session_id;?>&event=<?php echo $row['id'];?>">EDIT</a></span> | 
										<span class="icon-remove icon-small"> <a class="delete_event" id="<?php echo $row['id'];?>" href="<?php echo $row['id'];?>">DELETE</a></span> | 
									</i></div>
								<?php } ?>
									</div>
                                </div>
                            </div>
                        </div>
<script type="text/javascript">
	$(document).ready( function() {
		$('.delete_event').click( function() {
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_contact.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			alert(html);
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Event is Successfully Deleted", { header: 'Data Delete' });	
			}
			}); 		
			return false;
		});				
	});
</script>
                        <!-- /block -->
                    </div>
                </div>
				<?php include('Add_diary.php'); ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>