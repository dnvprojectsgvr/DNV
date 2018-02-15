<div class="box-body" ng-app>
  <form id="edit_faculty_details" action="" method="post" enctype="multipart/form-data">

    <div class="col-md-4 form-group">
      <label>Faculty First Name *</label>
      <input type="text" class="form-control" name="faculty_details[f_name]"  placeholder="Enter faculty_details Name..." maxlength="128" value="<?php echo $faculty_details[0]['f_name']; ?>" required="required">
  </div>              
  <div class="col-md-4 form-group">
      <label>Faculty Middile Name *</label>
      <input type="text" class="form-control" name="faculty_details[m_name]"  placeholder="Enter faculty_details Name..." maxlength="128" value="<?php echo $faculty_details[0]['m_name']; ?>" required="required">
  </div>
   <div class="col-md-4 form-group">
      <label>Faculty Last Name *</label>
      <input type="text" class="form-control" name="faculty_details[l_name]"  placeholder="Enter faculty_details Name..." maxlength="128" value="<?php echo $faculty_details[0]['l_name']; ?>" required="required">
    </div>
  <div class="col-md-4 form-group">
      <label>Faculty Name *</label>
      <input type="text" class="form-control" name="faculty_details[full_name]"  placeholder="Enter faculty_details Name..." maxlength="128" value="<?php echo $faculty_details[0]['full_name']; ?>" required="required">
  </div>

  <div class="col-md-4 form-group">
      <label>Gender *</label>
      <input type="text" class="form-control" name="faculty_details[gender]"  placeholder="Enter faculty_details Designation..." maxlength="128" value="<?php echo $faculty_details[0]['gender']; ?>" required="required">
  </div>

  <div class="col-md-4 form-group">
      <label>Date of Birth *</label>
      <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input type="text" class="form-control datepicker" name="faculty_details[dob]" value="<?php echo $faculty_details[0]['dob']; ?>"  required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
    </div>
</div>
<div class="col-md-4 form-group">
  <label>Mobile No. *</label>
  <input type="text" class="form-control" name="faculty_details[mob_no]"  maxlength="128" placeholder="Enter faculty_details Mobile " value="<?php echo $faculty_details[0]['mob_no']; ?>" required="required">
</div>

<div class="col-md-4 form-group">
  <label>Email  *</label>
  <input type="text" class="form-control" name="faculty_details[email_id]"  maxlength="128" placeholder="Enter faculty_details Email " value="<?php echo $faculty_details[0]['email_id']; ?>" required="required">
</div>
<!-- <div class="col-md-4 form-group">
    <label> Department</label>
    <input type="text" class="form-control" name="faculty_details[department]"  maxlength="128" placeholder="Enter faculty_details department" value="<?php //echo $faculty_details[0]['department']; ?>">
</div>
 -->
<div class="col-md-4 form-group">
  <label>Username *</label>
  <input type="text" class="form-control" name="faculty_details[faculty_id]"  maxlength="128" placeholder="faculty_details Username" value="<?php echo $faculty_details[0]['faculty_id']; ?>">
</div>
<!-- 
<div class="col-md-4 form-group">
    <label>Password *</label>
    <input type="text" class="form-control" name="faculty_details_details[password]"  maxlength="128" placeholder="faculty_details Password" value="<?php echo $faculty_details_details[0]['password']; ?>">
</div> -->

<input type="hidden" name="submit" value="Submit">

<div class="col-md-12 form-group">
  <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
</div>
</form>
</div>