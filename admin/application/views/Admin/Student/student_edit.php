<div class="box-body" ng-app>
    <?php echo form_open_multipart(); ?>
    <div class="col-md-12 form-group">
        <label>Name of Student* </label>
        <input type="text" class="form-control" name="student_details[full_name]" required="required" placeholder="Enter Service Provider Name..." maxlength="128" value="<?php echo $student_details[0]['full_name']; ?>">
    </div>

    <div class="col-md-12 form-group">
        <label>ID of Student* </label>
        <input type="text" class="form-control" name="student_details[student_id]" required="required" placeholder="Enter Service Provider Name..." maxlength="128" value="<?php echo $student_details[0]['student_id']; ?>">
    </div>

    <div class="col-md-12 form-group">
        <label>First Name of Student* </label>
        <input type="text" class="form-control" name="student_details[f_name]" required="required" placeholder="Enter Service Provider Name..." maxlength="128" value="<?php echo $student_details[0]['f_name']; ?>">
    </div>

    <div class="col-md-12 form-group">
        <label>Middile Name of Student* </label>
        <input type="text" class="form-control" name="student_details[m_name]" required="required" placeholder="Enter Service Provider Name..." maxlength="128" value="<?php echo $student_details[0]['m_name']; ?>">
    </div>

    <div class="col-md-12 form-group">
        <label>Last Name of Student* </label>
        <input type="text" class="form-control" name="student_details[l_name]" required="required" placeholder="Enter Service Provider Name..." maxlength="128" value="<?php echo $student_details[0]['l_name']; ?>">
    </div>

    <div class="col-md-12 form-group">
        <label>Fater Name of Student* </label>
        <input type="text" class="form-control" name="student_details[father_name]" required="required" placeholder="Enter Service Provider Name..." maxlength="128" value="<?php echo $student_details[0]['father_name']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label>Email* </label>
        <input type="email" class="form-control" name="student_details[email_id]" required="required" placeholder="Enter Email of Service Provider..." maxlength="128" value="<?php echo $student_details[0]['email_id']; ?>">
    </div>

    <div class="col-md-4 form-group">
      <label>Mobile No.* </label>
      <input type="text" name="student_details[mob_no]" class="form-control" placeholder="Enter Mobile No." maxlength="13" value="<?php echo $student_details[0]['mob_no']; ?>">  
  </div>
  <br>

  <div class="col-md-4 form-group">
    <label>Addminssion Year.* </label>
    <input type="text" name="student_details[admin_year]" class="form-control" placeholder="Enter GST IN No..." maxlength="128" value="<?php echo $student_details[0]['admin_year']; ?>">
</div>

<div class="col-md-12 form-group">
    <label>Roll No* </label>
    <textarea class="form-control" name="student_details[roll_no]" maxlength="1024" placeholder="Enter Address of Service Provider..." style="resize:none;"> <?php echo $student_details[0]['roll_no']; ?></textarea>
</div>

<div class="col-md-3 form-group">
  <label>Course* </label>
  <input type="text" class="form-control" name="student_details[course]" required="required" placeholder="Enter City of Service Provider..." maxlength="128" value="<?php echo $student_details[0]['course']; ?>">
</div>

<div class="col-md-3 form-group">
  <label>Date of Birth* </label>
  <input type="text" name="student_details[dob]" class="form-control" placeholder="Enter State." maxlength="25" value="<?php echo $student_details[0]['dob']; ?>">  
</div>
<br>

<div class="col-md-12 form-group">
  <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
</div>

<?php echo form_close(); ?>
</div>