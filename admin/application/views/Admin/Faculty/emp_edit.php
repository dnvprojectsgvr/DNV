<div class="box-body" ng-app>
  <form id="edit_employee" action="" method="post" enctype="multipart/form-data">
                    
    <div class="col-md-4 form-group">
      <label>Employee Name *</label>
      <input type="text" class="form-control" name="employee[name]"  placeholder="Enter Employee Name..." maxlength="128" value="<?php echo $employee[0]['name']; ?>" required="required">
    </div>

    <div class="col-md-4 form-group">
      <label>Designation *</label>
      <input type="text" class="form-control" name="employee[designation]"  placeholder="Enter Employee Designation..." maxlength="128" value="<?php echo $employee[0]['designation']; ?>" required="required">
    </div>

    <div class="col-md-4 form-group">
      <label>Date of Birth *</label>
      <div class="input-group">
        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
        <input type="text" class="form-control datepicker" name="employee[dob]" value="<?php echo $employee[0]['dob']; ?>"  required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
      </div>
    </div>

    <div class="col-md-4 form-group">
      <label>Address*</label>
      <input type="text" class="form-control" name="employee[address]" required="required" placeholder="Enter Employee Address..." maxlength="128" value="<?php echo $employee[0]['address']; ?>" required="required">
    </div>
                                  
    <div class="col-md-4 form-group">
        <label>City *</label>
        <input type="text" class="form-control" name="employee[city]"  maxlength="128" placeholder="Enter Employee City..." value="<?php echo $employee[0]['city']; ?>" required="required">
    </div>

    <div class="col-md-4 form-group">
        <label>State *</label>
        <input type="text" class="form-control" name="employee[state]" placeholder="Enter Employee State..." value="<?php echo $employee[0]['state']; ?>" required="required">
    </div>

    <div class="col-md-4 form-group">
        <label>Pincode</label>
        <input type="text" class="form-control" name="employee[pincode]"  maxlength="128" placeholder="Enter Employee Pincode..." value="<?php echo $employee[0]['pincode']; ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Picture</label>
      <input type="file" class="form-control" name="picture" accept="image/*">
    </div>

    <div class="col-md-6 form-group">
      <label>Employee ID Proof</label>
      <input type="file" class="form-control" name="id_proff" accept="image/*">
    </div>

    <div class="col-md-4 form-group">
      <label>Mobile 1 *</label>
      <input type="text" class="form-control" name="employee[mobile1]"  maxlength="128" placeholder="Enter Employee Mobile 1" value="<?php echo $employee[0]['mobile1']; ?>" required="required">
    </div>

    <div class="col-md-4 form-group">
        <label>Mobile 2</label>
        <input type="text" class="form-control" name="employee[mobile2]"  maxlength="128" placeholder="Enter Employee Mobile 2" value="<?php echo $employee[0]['mobile2']; ?>">
    </div>

    <div class="col-md-4 form-group">
      <label>Mobile 3</label>
      <input type="text" class="form-control" name="employee[mobile3]"  maxlength="128" placeholder="Enter Employee Mobile 3" value="<?php echo $employee[0]['mobile3']; ?>">
    </div>

    <div class="col-md-4 form-group">
      <label>Email 1 *</label>
      <input type="text" class="form-control" name="employee[email1]"  maxlength="128" placeholder="Enter Employee Email 1" value="<?php echo $employee[0]['email1']; ?>" required="required">
    </div>

    <div class="col-md-4 form-group">
        <label>Email 2</label>
        <input type="text" class="form-control" name="employee[email2]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['email2']; ?>">
    </div>


<div class="col-md-4 form-group">
        <label>Neighbor Name</label>
        <input type="text" class="form-control" name="employee[neighbor]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['neighbor']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label>Neighbor Number</label>
        <input type="text" class="form-control" name="employee[neighbor_no]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['neighbor_no']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label>PAN No</label>
        <input type="text" class="form-control" name="employee[pan_no]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['pan_no']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label> Blood Group</label>
        <input type="text" class="form-control" name="employee[blood_group]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['blood_group']; ?>">
    </div>

        <div class="col-md-4 form-group">
        <label>Blood Group </label>
        <select class="form-control" name="employee[blood_group]" >
            <option value="None">None</option>
            <option <?php if($employee[0]['blood_group']=='A+') { echo"selected"; } ?>>A+</option>
            <option <?php if($employee[0]['blood_group']=='A-') { echo"selected"; } ?>>A-</option>
            <option <?php if($employee[0]['blood_group']=='B+') { echo"selected"; } ?>>B+</option>
            <option <?php if($employee[0]['blood_group']=='B-') { echo"selected"; } ?>>B-</option>
            <option <?php if($employee[0]['blood_group']=='AB+') { echo"selected"; } ?>>AB+</option>
            <option <?php if($employee[0]['blood_group']=='AB-') { echo"selected"; } ?>>AB-</option>
            <option <?php if($employee[0]['blood_group']=='O+') { echo"selected"; } ?>>O+</option>
            <option <?php if($employee[0]['blood_group']=='O-') { echo"selected"; } ?>>O-</option>
        </select>
    </div>

    <div class="col-md-4 form-group">
        <label> Reference at Joining Time</label>
        <input type="text" class="form-control" name="employee[reference]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['reference']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label>  Date of Joining</label>
        <input type="text" class="form-control" name="employee[emp_doj]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['emp_doj']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label> Department</label>
        <input type="text" class="form-control" name="employee[department]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['department']; ?>">
    </div>

     <div class="col-md-4 form-group">
        <label>Past Working Company 1</label>
        <input type="text" class="form-control" name="employee[past_work_company1]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['past_work_company1']; ?>">
    </div>

     <div class="col-md-4 form-group">
        <label> Past Working Company 2</label>
        <input type="text" class="form-control" name="employee[past_work_company2]"  maxlength="128" placeholder="Enter Employee Email 2" value="<?php echo $employee[0]['past_work_company2']; ?>">
    </div>





    <div class="col-md-12 form-group">
        <label>Remarks </label>
        <textarea class="form-control" name="employee[remarks]" maxlength="1024" placeholder="Enter Remarks, if any (Maximum 1024 characters allowed.)" style="resize:none;"> <?php echo $employee[0]['remarks']; ?></textarea>
    </div>

    <div class="col-md-4 form-group">
      <label>Username *</label>
      <input type="text" class="form-control" name="employee[username]"  maxlength="128" placeholder="Employee Username" value="<?php echo $employee[0]['username']; ?>">
    </div>

    <div class="col-md-4 form-group">
        <label>Password *</label>
        <input type="text" class="form-control" name="employee[password]"  maxlength="128" placeholder="Employee Password" value="<?php echo $employee[0]['password']; ?>">
    </div>

    <input type="hidden" name="submit" value="Submit">

    <div class="col-md-12 form-group">
      <button type="type" class="btn btn-primary pull-right" name="submit" value="Submit">SUBMIT</button>
    </div>
    </form>
</div>