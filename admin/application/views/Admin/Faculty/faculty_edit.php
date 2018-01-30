<div class="box-body" ng-app>
  <?php echo form_open_multipart(); ?>
  <div class="col-md-12 form-group">
    <label>Name of Faculty* </label>
    <input type="text" class="form-control" name="faculty_details[full_name]" required="required"    maxlength="128" value="<?php echo $faculty_details[0]['full_name']; ?>">
  </div>

  <div class="col-md-12 form-group">
    <label>ID of Faculty* </label>
    <input type="text" class="form-control" name="faculty_details[faculty_id]" required="required"    maxlength="128" value="<?php echo $faculty_details[0]['faculty_id']; ?>">
  </div>

  <div class="col-md-12 form-group">
    <label>First Name of Faculty* </label>
    <input type="text" class="form-control" name="faculty_details[f_name]" required="required"    maxlength="128" value="<?php echo $faculty_details[0]['f_name']; ?>">
  </div>

  <div class="col-md-12 form-group">
    <label>Middile Name of Faculty* </label>
    <input type="text" class="form-control" name="faculty_details[m_name]" required="required"    maxlength="128" value="<?php echo $faculty_details[0]['m_name']; ?>">
  </div>

  <div class="col-md-12 form-group">
    <label>Last Name of Faculty* </label>
    <input type="text" class="form-control" name="faculty_details[l_name]" required="required"    maxlength="128" value="<?php echo $faculty_details[0]['l_name']; ?>">
  </div>

  <div class="col-md-12 form-group">
    <label>Fater Name of Faculty* </label>
    <input type="text" class="form-control" name="faculty_details[father_name]" required="required"   maxlength="128" value="<?php echo $faculty_details[0]['father_name']; ?>">
  </div>

  <div class="col-md-4 form-group">
    <label>Email* </label>
    <input type="email" class="form-control" name="faculty_details[email_id]" required="required" placeholder="Enter Email of Service Provider  maxlength="128" value="<?php echo $faculty_details[0]['email_id']; ?>">
  </div>

  <div class="col-md-4 form-group">
    <label>Mobile No.* </label>
    <input type="text" name="faculty_details[mob_no]" class="form-control" placeholder="Enter Mobile No." maxlength="13" value="<?php echo $faculty_details[0]['mob_no']; ?>">  
  </div>
  <br>

  <div class="col-md-3 form-group">
    <label>Date of Birth* </label>
    <input type="text" name="faculty_details[dob]" class="form-control" placeholder="Enter State." maxlength="25" value="<?php echo $faculty_details[0]['dob']; ?>">  
  </div>
  <br>

  <div class="col-md-12 form-group">
    <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
  </div>

  <?php echo form_close(); ?>
</div>