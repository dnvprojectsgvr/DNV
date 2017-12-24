<div align="center" class="container">
<p align="center"><!-- <a href="<?php echo base_url(); ?>">Upload new data</a> -->
    <a href="<?php echo site_url(); ?>/Gallery/">Upload New Photos</a>

</p>
<table border="1" style="width:100%">
  <tr>
    <td>S.No</td>
    <td>Name</td> 
    <td>Class</td>
    <td>Edit</td>
  </tr>
  <?php
    if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
    foreach ($view_data as $key => $data) { 
    ?>
  <tr>
    <td><?php echo $i++ ?></td>
    <td><?php echo $data['name']; ?></td> 
    <td><?php echo $data['class']; ?></td>
    <td><a href="<?php echo site_url(); ?>/Gallery/edit/<?php echo $data['u_id']; ?>">Edit</a></td>
  </tr>
  <?php } endif; ?>
</table>
</div>