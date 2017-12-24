<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dasboard.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>
				<li class=""><a href="manage.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Manage Events</a></li>
				<li class=""><a href="diary.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Diary/contact</a></li>
				<li class=""><a href="contacts.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Manage Contacts</a></li>
				<li class=""><a href="message.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Message Board</a></li>
				<li class=""><a href="uploads.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-upload"></i>&nbsp;Upload Materials</a></li>
				<li class=""><a href="add-event.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Add Events</a></li>
				<li class=""><a href="notification.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification</a></li>
				<li class="active"><a href="myevents.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;My Events</a></li>
		</ul>
</div>