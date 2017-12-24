

<div align="center" class="container">
<form method="POST" action="<?php echo site_url('Gallery/file_upload');?>" enctype='multipart/form-data'>
<table border="1">
<tr>
<td>Name</td>
<td><input type="text" name="name" required id="name" placeholder="Name"></td>
</tr>
<tr>
<td>Class</td>
<td><input type="text" name="class" required id="class" placeholder="Class"></td>
</tr>
<tr>
<td>Images</td>
<td><input type="file" name="userfile[]" required id="image_file" accept=".png,.jpg,.jpeg,.gif" multiple></td>
</tr>
<tr>
<td colspan="2" align="center"><input style="width: 50%;" type="submit" value="Submit"></td>
</tr>
</table>
</form>
</div>

